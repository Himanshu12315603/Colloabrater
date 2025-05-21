<?php
session_start();
require_once 'config.php';

// Assuming this session is set
$currentUserId = $_SESSION['user_id'] ?? null;

$stmt = $pdo->query("SELECT * FROM profiles ORDER BY full_name ASC");
$artists = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Function to create initials avatar
function getInitialsAvatar($name) {
  $initials = '';
  $parts = explode(' ', $name);
  foreach ($parts as $p) {
    $initials .= strtoupper($p[0]);
  }
  return 'https://ui-avatars.com/api/?name=' . urlencode($initials) . '&background=random&color=fff';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All Artists</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
      background-size: cover;
      background-position: center;
      backdrop-filter: blur(5px);
    }
  </style>
</head>
<body class="min-h-screen py-10 text-white bg-black/30">

<a href="dashboard.php">
    <button class="text-white absolute top-4 right-4 px-4 py-2 rounded-full hover:bg-gray-200 hover:text-black transition">Home </button>
</a>
  <h1 class="text-4xl text-center font-bold mb-8 drop-shadow-lg">🎨 Artist & Creator Directory</h1>

  <div class="text-center mb-6">
    <button onclick="toggleFollowing()" class="bg-white text-black px-4 py-2 rounded-full hover:bg-gray-200 transition">
      Toggle: Show Following Only
    </button>
  </div>

  <div id="artistGrid" class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
    <?php foreach ($artists as $index => $artist): ?>
      <div
        class="artist-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 shadow-lg hover:scale-105 transition-transform duration-300"
        data-id="<?= $artist['id'] ?>"
        data-name="<?= htmlspecialchars($artist['full_name']) ?>"
        data-is-current="<?= $artist['id'] == $currentUserId ? '1' : '0' ?>">
        <div class="flex flex-col items-center text-center">
          <img src="<?= getInitialsAvatar($artist['full_name']) ?>" alt="Avatar" class="w-24 h-24 rounded-full mb-4 shadow-md border-2 border-white" />
          <h2 class="text-xl font-semibold text-white"><?= htmlspecialchars($artist['full_name']) ?></h2>
          <p class="text-sm text-gray-200 mt-2 italic"><?= htmlspecialchars($artist['bio']) ?></p>
          <p class="text-sm text-gray-300 mt-1"><strong>Interests:</strong> <?= htmlspecialchars($artist['interests']) ?></p>

          <div class="flex gap-4 mt-4">
            <?php if (!empty($artist['linkedin'])): ?>
              <a href="<?= htmlspecialchars($artist['linkedin']) ?>" target="_blank" class="text-blue-300 hover:underline">LinkedIn</a>
            <?php endif; ?>
            <?php if (!empty($artist['instagram'])): ?>
              <a href="<?= htmlspecialchars($artist['instagram']) ?>" target="_blank" class="text-pink-300 hover:underline">Instagram</a>
            <?php endif; ?>
            <?php if (!empty($artist['story'])): ?>
              <a href="<?= htmlspecialchars($artist['story']) ?>" target="_blank" class="text-green-300 hover:underline">Portfolio</a>
            <?php endif; ?>
          </div>

          <?php if ($artist['id'] != $currentUserId): ?>
  <button
    class="follow-btn mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm shadow-lg transition"
    data-id="<?= $artist['id'] ?>"
    onclick="toggleFollow(this)"
  >
    Follow
  </button>
<?php endif; ?>

<?php if (!empty($artist['story'])): ?>
  <a href="<?= htmlspecialchars($artist['story']) ?>" target="_blank" class="mt-2 inline-block bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-full text-sm shadow transition">
    <?= $artist['id'] == $currentUserId ? 'View My Story' : 'View Story' ?>
  </a>
<?php endif; ?>

        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <script>
  const followed = new Set();
  let showFollowingOnly = false;

  function toggleFollow(button) {
    const id = button.dataset.id;
    const isFollowing = followed.has(id);

    if (isFollowing) {
      followed.delete(id);
      button.innerText = "Follow";
      button.classList.remove("bg-gray-500");
      button.classList.add("bg-blue-600");
      button.disabled = false;
    } else {
      followed.add(id);
      button.innerText = "Following ✔";
      button.classList.remove("bg-blue-600");
      button.classList.add("bg-gray-500");
    }

    updateVisibleCards();
  }

  function toggleFollowing() {
    showFollowingOnly = !showFollowingOnly;
    updateVisibleCards();
  }

  function updateVisibleCards() {
    document.querySelectorAll(".artist-card").forEach(card => {
      const id = card.dataset.id;
      const isSelf = card.dataset.isCurrent === "1";

      // Show/hide based on filter
      if (showFollowingOnly && !followed.has(id)) {
        card.style.display = "none";
      } else {
        card.style.display = "block";
      }

      // Update button if already followed
      const btn = card.querySelector(".follow-btn");
      if (btn) {
        if (followed.has(id)) {
          btn.innerText = "Following ✔";
          btn.classList.remove("bg-blue-600");
          btn.classList.add("bg-gray-500");
        } else {
          btn.innerText = "Follow";
          btn.classList.remove("bg-gray-500");
          btn.classList.add("bg-blue-600");
        }
      }
    });
  }
</script>

</body>
</html>
