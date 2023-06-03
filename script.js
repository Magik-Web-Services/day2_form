let Form = document.querySelector('form')
let Data = null;
Form.addEventListener('submit', (e) => {
    e.preventDefault()
    const data = Object.fromEntries(new FormData(e.target).entries());
    Data = data;
    // console.log(data);
    Form.reset();
    loadData()
});

function loadData() {
    let Data_container = document.getElementById("data_con");
    let Data_item =
        `
        <div class="data">
        <div class="data_item">
            <h3>FName:</h3>
            <p>${Data.FName}</p>
        </div>
        <div class="data_item">
            <h3>LName:</h3>
            <p>${Data.LName}</p>
        </div>
        <div class="data_item">
            <h3>Emails:</h3>
            <p>${Data.Email}</p>
        </div>
        <div class="data_item">
            <h3>Phone:</h3>
            <p>${Data.phone}</p>
        </div>
        <div class="data_item">
            <h3>Address:</h3>
            <p>${Data.Address}</p>
        </div>
        <div class="data_item">
            <h3>Country:</h3>
            <p>${Data.Country}</p>
        </div>
        <div class="data_item">
            <h3>State:</h3>
        <p>${Data.State}</p>
        </div>
        <div class="data_item">
            <h3>City:</h3>
            <p>${Data.City}</p>
        </div>
        <div class="data_item">
            <h3>Gender:</h3>
            <p>${Data.Gender}</p>
        </div>
    </div>
    `;
    Data_container.innerHTML += Data_item;
}