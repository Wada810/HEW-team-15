let kids_data = [
    {
        "img": "1.png",
        "text": "まずは<span class='yellow'>お題</span>を決めよう!",
    },
    {
        "img": "2.png",
        "text": "次に<span class='yellow'>やることリスト</span>の作成!ここであいてにさせる動きを<span class=''>順番</span>に入力してね!",
    },
    {
        "img": "3.png",
        "text": "まずはお題を決めよう!",
    },
    {
        "img": "4.png",
        "text": "まずはお題を決めよう!",
    },
    {
        "img": "5.png",
        "text": "まずはお題を決めよう!",
    },
    {
        "img": "6.png",
        "text": "まずはお題を決めよう!",
    },
    {
        "img": "7.png",
        "text": "まずはお題を決めよう!",
    },
];
//子供用を始める
document.getElementById("howto_kids").addEventListener("click",()=>{
    document.querySelector(".for_kids").classList.remove("hidden");
    document.querySelector(".for_kids").classList.add("slide_in");
})