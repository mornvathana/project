// Function for input fields in profile page
function editMode() {
    // Enable input fields
    document.getElementById("input1").disabled = false;
    document.getElementById("input2").disabled = false;
    // document.getElementById("input3").disabled = false;
  
    // Show password fields
    document.getElementById("passwordFields").classList.remove("hidden");
  
    // Show the update button and hide the edit button
    document.getElementById("updateBtn").classList.remove("hidden");
    document.getElementById("editBtn").classList.add("hidden");
    }
  
  function updateMode() {
  // Disable input fields
  document.getElementById("input1").disabled = true;
  document.getElementById("input2").disabled = true;
  // document.getElementById("input3").disabled = true;
  
  // Hide password fields
  document.getElementById("passwordFields").classList.add("hidden");
  
  // Show the edit button and hide the update button
  document.getElementById("updateBtn").classList.add("hidden");
  document.getElementById("editBtn").classList.remove("hidden");
  }
  
  // add active to right button
  const rightButtons = document.querySelectorAll("#righ_button li");
  console.log(rightButtons);
  for(let i = 0; i < rightButtons.length; i++){
    rightButtons[i].addEventListener("click", function(){
      const current = document.querySelector(".active");
      current.className = current.className.replace("active", "")
      rightButtons[i].className = "active";
    })
  }
  
  // Function to filter of each page for profile page
  const pages = document.querySelectorAll(".page");
  console.log(pages);

  rightButtons[0].addEventListener("click", function(){
    for(let i = 0; i < pages.length; i++){
      if(pages[i].getAttribute("name") === "profile"){
        pages[i].style.display = 'block';
      }else{
        pages[i].style.display = 'none';
      }
    }
  });

    rightButtons[1].addEventListener("click", function(){
        for(let i = 0; i < pages.length; i++){
        if(pages[i].getAttribute("name") === "orders"){
            pages[i].style.display = 'block';
        }else{
            pages[i].style.display = 'none';
        }
        }
    });
  
  
  
  