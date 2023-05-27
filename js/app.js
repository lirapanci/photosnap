const menuBtn = document.querySelector(".navbar-burger")

menuBtn.addEventListener('click', function (){

    const menuResponsive = document.getElementById("menu-main-menu")
    menuResponsive.classList.toggle("active")
    const xBtn = document.querySelector(".x-btn")
    const burgerBtn = document.querySelector(".burger-btn")
    xBtn.classList.toggle("hidden")
    burgerBtn.classList.toggle("hidden")
    const inviteBtn = document.getElementById("inviteBtn")
    inviteBtn.classList.toggle("hidden")

})


//Toggle Switch

let planData = document.getElementsByClassName('plan-data')
let toggleSwitch = document.getElementById('toggle')

toggleSwitch.addEventListener('change', function (e) {
    if (toggleSwitch.checked) {
        for (let i = 0; i < planData.length; i++) {
            let yearlyPlanPrice = (planData[i].querySelector('.plan-price').innerHTML) * 10
            planData[i].querySelector('.plan-price').innerHTML = yearlyPlanPrice.toFixed(2)

            let yearlyPeriod = planData[i].querySelector('.plan-duration')
            yearlyPeriod.innerHTML = "per year"
        }
    } else {
        for (let i = 0; i < planData.length; i++) {
            let yearlyPlanPrice = (planData[i].querySelector('.plan-price').innerHTML) / 10
            planData[i].querySelector('.plan-price').innerHTML = yearlyPlanPrice.toFixed(2)

            let yearlyPeriod = planData[i].querySelector('.plan-duration')
            yearlyPeriod.innerHTML = "per month"
        }
    }
})