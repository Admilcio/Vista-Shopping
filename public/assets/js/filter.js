// 01.Brand filter js
// 02.Price filter js
// 03.brand filter js
// 04. Category filter js
// 05. Page size filter js


  /*=====================
      1. Brand filter js
      ==========================*/
function filterProductsByBrand(brand) {
    var brands = "";
    $("input[name='brands']:checked").each(function() {
        if (brands === "") {
            brands += $(this).val();
        } else {
            brands += "," + $(this).val();
        }
    });
    $("#q_brand").val(brands);
    $("#frmFilter").submit();
}

/*=====================
    2. Category filter js
    ==========================*/
function filterProductsByCategory(category) {
    var categories = "";
    $("input[name='categories']:checked").each(function() {
        if (categories === "") {
            categories += $(this).val();
        } else {
            categories += "," + $(this).val();
        }
    });
    $("#q_category").val(categories);
    $("#frmFilter").submit();
}

/*=====================
    3. Page filter js
    ==========================*/

$("#pagesize").on('change', function(){
  $("#size").val($("#pagesize option:selected").val());
  $("#frmFilter").submit();
});
$("#orderby").on('change', function(){
  $("#order").val($("#orderby option:selected").val());
  $("#frmFilter").submit();
});

/*=====================
    4. Accordion js
    ==========================*/

  for (let i = 1; i <= 5; i++) {
      $(".btn-" + i).on('click', function(){
        $(".cat-" + i).slideToggle();
      });
    }
    