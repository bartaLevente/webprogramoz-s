images = [
    "./media/index/gym_1.jpg",
    "./media/index/gym_2.jpg",
    "./media/index/gym_3.jpg",
    "./media/index/gym_4.jpg",
    "./media/index/gym_5.jpg",
    "./media/index/gym_6.jpg",
    "./media/index/gym_7.jpg",
    "./media/index/gym_8.jpg",
    "./media/index/gym_9.jpg",
    "./media/index/gym_10.jpg"
]

let anim = document.querySelector(".animated")
let behind = document.querySelector(".behind")
let ind = Math.floor(Math.random() * images.length);
let buttons = document.querySelectorAll("button")
let liItems = document.querySelectorAll("li")
let liLabels = document.querySelectorAll(".label")
let ul = document.querySelector("ul")


anim.src=images[ind]
ind++
ind %= images.length
behind.src = images[ind]

function slideNext() {
    buttons.forEach((but)=>{
        but.disabled = true
    })
    anim.style.transition = 'transform 1.5s ease-in-out'
    anim.style.transform = 'translate(-100%,0)'
    setTimeout(()=>{
        anim.style.transition = 'none'
        anim.src = images[ind]
        anim.style.transform = 'none'
        ind++
        ind %= images.length
        behind.src = images[ind]
        buttons.forEach((but)=>{
            but.disabled = false
        })
    },1500)

}

function slidePrev() {
    buttons.forEach((but)=>{
        but.disabled = true
    })
    anim.style.transition = 'none'
    if (ind===0)
    {
        ind+=images.length-1
    }
    else
    {
        ind--
    }
    behind.src = images[ind]
    anim.style.transform = 'translate(-100%,0)'
    setTimeout(()=>{
        if(ind===0)
        {
            ind+=images.length-1
        }
        else
        {
            ind--
        }
        anim.src=images[ind]
        anim.style.transition = 'transform 1.5s ease-in-out'
        anim.style.transform = 'none'
        ind++
        ind %= images.length
        behind.src = images[ind]
    },0)
    setTimeout(()=>{
        buttons.forEach((but)=>{
            but.disabled = false
        })
    },1500)
}

document.querySelector(".leftArrow").addEventListener('click',slidePrev);
document.querySelector(".rightArrow").addEventListener('click',slideNext);


ul.addEventListener('mouseleave',()=>{
    for (let i=0;i<liItems.length;i++)
    {
        liItems[i].style.transform = "scale(1) translateY(0)"
        liLabels[i].style.opacity = "0"
    }
})

liItems.forEach(function (item,index,arr)
{
    item.addEventListener('mouseenter',()=>{
        for (let i=0;i<arr.length;i++)
        {
            liLabels[i].style.opacity = "0"
            let scaleOffset= 1.5 - Math.abs(i-index)*0.2
            let translateOffset= -50 + Math.abs(i-index)*10
            liItems[i].style.transform = "scale( "+ scaleOffset.toString() +") translateY(" + translateOffset + "%)"
        }
        liLabels[index].style.opacity = "1"
    })

})

