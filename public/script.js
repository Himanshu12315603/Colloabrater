document.addEventListener("DOMContentLoaded", () => {
    fetch("events.json")
      .then((response) => response.json())
      .then((events) => loadEvents(events));
  });
  
  function loadEvents(events) {
    const container = document.getElementById("eventsContainer");
    container.innerHTML = "";
  
    events.forEach((event) => {
      const card = document.createElement("div");
      card.className = "bg-white rounded-lg shadow-md hover:shadow-lg transition cursor-pointer overflow-hidden";
  
      card.innerHTML = `
        <img src="${event.image}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="text-xl font-semibold">${event.name}</h3>
          <span class="text-sm bg-indigo-100 text-indigo-700 px-2 py-1 rounded-full inline-block my-2">${event.type}</span>
          <p class="text-sm text-gray-600 mb-2">${event.date}</p>
          <p class="text-sm text-gray-700 truncate">${event.description}</p>
        </div>
      `;
  
      card.addEventListener("click", () => {
        document.getElementById("modalImage").src = event.image;
        document.getElementById("modalTitle").innerText = `${event.name} (${event.type})`;
        document.getElementById("modalDate").innerText = `📅 ${event.date}`;
        document.getElementById("modalDesc").innerText = event.description;
        document.getElementById("eventModal").classList.remove("hidden");
      });
  
      container.appendChild(card);
    });
  }
  
  function closeModal() {
    document.getElementById("eventModal").classList.add("hidden");
  }
  