var form = document.getElementById("form");
form.style.overflowY = "scroll";
form.style.maxHeight = "60vh";
var totalAjout = 2;

function addForm() {
  console.log("Here We Go Again");
  var total = document.getElementById("total");
  total.value = totalAjout;
  var newForm = document.createElement("div");
  newForm.setAttribute("class", "space-y-4");
  //   for (let index = 0; index < size; index++) {

  //     console.log( categoriesArray[index].name);

  // }

  newForm.innerHTML = `
        <hr class="mt-6">
                        </hr>
                        <p class="text-center text-base font-bold text-dark dark:text-white">Medicine ${totalAjout}</p>
                        <input type="hidden" name="total"  id="total" value="${totalAjout}">
                        <div class="flex gap-4">

                            <div class="w-full">
                                <label for="name${totalAjout}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine name</label>
                                <input type="text"  name="name${totalAjout}" id="name${totalAjout}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine${totalAjout}">
                                <small id="name${totalAjout}Span"></small>
                            </div>

                            <div class="w-full" >
                                <label for="category${totalAjout}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                           <div id="cat-${totalAjout}"">
                            </div>
                            <span id="category${totalAjout}Span"></span>
          

                            </div>
                        </div>
                        <div class="flex gap-4">

                            <div class="w-full">
                                <label for="capacity${totalAjout}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
                                <input type="number" name="capacity${totalAjout}" id="capacity${totalAjout}" placeholder="capacity${totalAjout}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <span id="capacity${totalAjout}Span"></span>
                            </div>

                            <div class="w-full">
                                <label for="price${totalAjout}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price${totalAjout}" id="price${totalAjout}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine${totalAjout}" required>
                                <span id="price${totalAjout}Span"></span>

                            </div>
                        </div>
                  
                        <div class="flex gap-4">
                            <div class="w-full ">
                                <label for="image${totalAjout}" class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input type="file" name="image${totalAjout}" id="image${totalAjout}" class=" mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500  block w-full px-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine's image" required>
                                <span id="image${totalAjout}Span"></span>

                            </div>
                            <div class="w-full ">
                                <label for="expired${totalAjout}" class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Expired Date</label>
                                <input type="date" name="expired${totalAjout}" id="expired${totalAjout}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine's image" required>
                                <span id="expired${totalAjout}Span"></span>

                            </div>
                        </div>
        `;
  console.log(newForm);

  form.appendChild(newForm);

  let categoriesArray = JSON.parse(localStorage.getItem("categories"));
  //   console.log(categoriesArray);

  let size = Object.keys(categoriesArray).length;
  let cat = "cat-" + totalAjout;
  //   console.log("cat ", cat);
  var selectDiv = document.getElementById(cat);
  //   console.log("selectDiv", selectDiv);
  var selectList = document.createElement("select");
  selectList.className +=
    "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white";
  selectList.name = "category" + totalAjout;
  selectList.id = "category" + totalAjout;
  selectList.required = true;

  if (selectList != null) {
    var disableOption = document.createElement("option");
    disableOption.value = "";
    disableOption.text = "Select category";
    disableOption.disabled = true;
    selectList.appendChild(disableOption);

    for (var i = 0; i < size; i++) {
      var option = document.createElement("option");
      option.value = categoriesArray[i].id;
      option.text = categoriesArray[i]["name"];
      selectList.appendChild(option);
    }

    selectDiv.appendChild(selectList);
  }

  totalAjout++;
}
