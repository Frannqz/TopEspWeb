let tblProducts; // Variable global para DataTable

$(document).ready(init);

function init() {
    $("#loadProductsBtn").click(function () {
        $.getJSON("/api/products", function (data) {
            // console.table(data);
            $.each(data, function (index, dataObj) {
                $("#tblProducts tbody:last-child").append(
                    "<tr>" +
                    "<td>" + dataObj.id + "</td>" +
                    "<td>" + dataObj.name + "</td>" +
                    "<td>" + dataObj.sale_price + "</td>" +
                    "<td>" + dataObj.quantity + "</td>" +
                    "<td>" + dataObj.category.name + "</td>" +
                    "</tr>");
            });
            let table = new DataTable('#tblProducts');
        });
    });

    // Escuchar cambios en el ComboBox de categorías
    $('#categoryFilter').change(function () {
        // Obtener el valor seleccionado del ComboBox
        let category = $(this).val();
        // Filtrar los productos por categoría y cargar los datos en la tabla
        tblProducts.ajax.url('/api/products_dt?category=' + category).load();
    });

    tblProducts = new DataTable('#tblProductsDt', {
        ajax: '/api/products_dt',
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'sale_price' },
            { data: 'quantity' },
            { data: 'category.name' },
        ]
    });
}
