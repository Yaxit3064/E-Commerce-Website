var Clothing = ["men","women","children","unisex","jackets","pants","shirts","jeans","shorts","shoes",
"shocks","sweater","hoodies","dress "];


var Tech = ["mobile","desktop","laptop","smartwatch","mouse","keyboard","pendrive","gamepad","TV"];


var Furniture = ["chair","sofa","bed","table","dining-set","mattress"];


var Grocery = ["food","baby","snacks","beauty","drinks","face-care","hair-care"];


var CarsAndAccessories = ["car parts","tyres","helmets","engine-oil","lighting","bike-parts"];


$("#inputCategory").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Clothing":
        optionsList = Clothing;
        break;
    case "Tech":
        optionsList = Tech;
        break;
    case "Furniture":
        optionsList = Furniture;
        break;
    case "Grocery":
        optionsList = Grocery;
        break;
    case "Cars & Accessories":
        optionsList = CarsAndAccessories;
        break;
   
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputSubCategory").html(htmlString);

});