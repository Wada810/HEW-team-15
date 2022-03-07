let ol_list = [];
let form_list = [];
let fix_list = [];

function update(){
    console.log("updated");
    ol_list = [];
    form_list = [];
    fix_list = [];
    const ol_all = document.getElementsByClassName("ol_order");
    const form_all = document.getElementsByClassName("form_order");
    let cnt = ol_all.length;
    if (ol_all.length > 0) {
        for (let i = 0; i < cnt;i++) {
            ol_list[i] = ol_all[i].classList[1];
        }
        // 入れ替え前の現form内　指示を格納
        for (let i = 0; i < cnt;i++) {
            form_list[i] = form_all[i];

        }
        // form内の　指示全削除
        for (let i = 0; i < cnt;i++) {
            form_all[0].remove();
        }

        // form内の順番入れ替え
        for (let i = 0; i < cnt;i++) {
            for (let j = 0; j < cnt;j++) {
                if(ol_list[i] == form_list[j].classList[1]){
                    fix_list[i] = form_list[j]
                }
            }
        }
        // formに入れ替え後の順番を 入れていく

        for (let i = 0; i < cnt;i++){
            form.appendChild(fix_list[i])
        }
    }
    let lists = document.getElementsByClassName("ol_order");
    for(let i = 0; i < lists.length; i++ ){
        lists[i].firstElementChild.textContent = (i + 1) + ".";
    }
}

function sort(){
    new Sortable(order_list,{
        onEnd : update,
        filter: '.filtered',
        handle: '.handle',
        animation: 150,
    })
}
