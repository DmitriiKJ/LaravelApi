document.addEventListener("DOMContentLoaded", async () => {
    let url = "http://localhost:8000/api/products"

    const res = await fetch(url)
    if (res.ok) {
        const data = await res.json();

        let table = null;
        data.forEach(prod => {
            if(table == null) table = "";
            table += "<tr>"
            table += `<td>${prod.id}</td>`
            table += `<td>${prod.name}</td>`
            table += `<td>${prod.detail}</td>`
            table += `<td><button class="update" onclick="update(${prod.id})">Update</button></td>`
            table += `<td><button class="delete" onclick="remove(${prod.id})">Delete</button></td>`
            table += `<td><button class="copy" onclick="copy('${prod.name}', '${prod.detail}')">Copy fields to form</button></td>`
            table += "</tr>"
        });

        if(table == null)
        {
            document.getElementById("notFound").innerHTML = "Products not found"
        }
        else
        {
            document.getElementById("contentTable").innerHTML = table
        }
    }
    else{
        document.getElementById("notFound").innerHTML = "There are some problems with server"
    }
})

function copy(name, detail){
    document.getElementById("name").value = name
    document.getElementById("detail").value = detail
}

async function create(){
    let url = `http://localhost:8000/api/products`
    const productData = new URLSearchParams();

    let name = document.getElementById("name").value
    let detail = document.getElementById("detail").value

    if(name == '' && detail == ''){
        alert("Name and detail are required")
        return;
    }

    productData.append("name", name)
    productData.append("detail", detail)

    let res = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: productData
    })

    if (res.ok) {
        const data = await res.json();
        alert("Product was added");
        location.reload()
    } else {
        const errorData = await res.json();
        console.error("Error:", errorData);
        alert("Error with adding product");
    }
}

async function update(id){
    let url = `http://localhost:8000/api/products/${id}`
    const productData = new URLSearchParams();

    let name = document.getElementById("name").value
    let detail = document.getElementById("detail").value

    if(name == '' && detail == ''){
        alert("Name and detail are required")
        return;
    }

    productData.append("name", name)
    productData.append("detail", detail)

    let res = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: productData
    })

    if (res.ok) {
        const data = await res.json();
        alert("Product was updated");
        location.reload()
    } else {
        const errorData = await res.json();
        console.error("Error:", errorData);
        alert("Error with updating product");
    }
}

async function remove(id){
    let url = `http://localhost:8000/api/products/${id}`
    let res = await fetch(url, {method: "DELETE"})

    if (res.ok) {
        const data = await res.json();
        alert("Product was deleted");
        location.reload()
    } else {
        const errorData = await res.json();
        console.error("Error:", errorData);
        alert("Error with deleting product");
    }
}
