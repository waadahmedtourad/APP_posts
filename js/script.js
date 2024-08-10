async function fetchData() {
  const url = "https://jsonplaceholder.typicode.com/posts";
  try {
      const response = await fetch(url);
      const data = await response.json();
      displayData(data);
  } catch (error) {
      console.error("Error fetching data:", error);
  }
}
fetchData();
function createCard(item) {
  const card = document.createElement("div");
  card.className = "col-md-4 mb-4";

  card.innerHTML = `
      <div class="card h-100">
          <div class="card-header bg-dark text-light">
              ${item.title}
          </div>
          <div class="card-body">
              <p class="card-text">${item.body}</p>
          </div>
          <div class="card-footer text-muted">
              ID: ${item.id}
          </div>
      </div>
  `;

  return card;
}

function displayData(data) {
  const container = document.querySelector(".show-posts .row");
  for (const item of data.slice(0, 100)) {  
      const card = createCard(item);
      container.appendChild(card);
  }
}


