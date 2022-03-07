const insert = document.getElementById("order_input");
const form = document.getElementById('order_form');
const ol =  document.getElementById('order_list');

let order_cnt = 0;
let rock = 0;
let fix_flag = 0;
let disable = 0;
let alg_num = 0;

insert.addEventListener('change', ()=>{
    alg_num = document.getElementsByClassName("ol_order").length;
    /* 要素が一つ以上の時に完成ボタンを追加 */
    if(document.getElementsByClassName("form_order").length == 0){
        let complete_button = document.createElement("button");
        complete_button.setAttribute("id","complete_button");
        complete_button.setAttribute("class","btn-secondary");
        complete_button.textContent = "完成!!";
        form.appendChild(complete_button);
    }

    if(insert.value.trim() !== ""){

        // order_list(ulタグ)に指令を追加
        let li = document.createElement('li');
        li.className = "ol_order";
        li.classList.add(order_cnt);
        li.classList.add("algorithm_list__item");

        ol.appendChild(li);

        let div_num = document.createElement('div');
        div_num.className = "algorithm_number";
        div_num.textContent = (alg_num + 1) +".";
        li.appendChild(div_num);

        let div_contents = document.createElement('div');
        div_contents.className = "algorithm_contents";
        li.appendChild(div_contents);

        let handle = document.createElement("span");
        handle.setAttribute("class", "material-icons-round handle " + "h-" + order_cnt)
        handle.textContent = "drag_handle";
        div_contents.appendChild(handle);

        let p = document.createElement('p');
        p.className = "algorithm_name";
        p.textContent = insert.value;
        div_contents.appendChild(p);

        // send_order(formタグ)に指令をhiddenで追加
        let input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'order[]';
        input.className = "form_order";
        input.classList.add(order_cnt);
        input.value = insert.value ;

        form.appendChild(input);

        order_cnt++
        // inputをリセット
        insert.value = "";

        // クリックしたらfocus にする処理
        li.addEventListener('click',function li_func(){
            // 初期
            if(rock == 0){
                document.querySelector(`.h-${li.classList[1]}`).classList.add("hidden");
                rock = 1;

                disable =  li.classList[1];

                div_contents.classList.add('is-active');
                p.id = "text";

                div_material_items = document.createElement('div');
                div_material_items.className = "material_items";
                div_contents.appendChild(div_material_items);

                // 削除
                let del_button =  document.createElement('button');
                del_button.id = "delete";
                del_button.value = li.classList[1];
                div_material_items.appendChild(del_button);
                del_button.innerHTML = '<span class="material-icons-round delete">delete</span>削除';


                // 編集
                let fix_button =  document.createElement('button');
                fix_button.id = "fix";
                fix_button.value = li.classList[1];
                div_material_items.appendChild(fix_button);
                fix_button.innerHTML = '<span class="material-icons-round border">border_color</span>編集';
            }
            else if(disable == li.classList[1]){
                document.querySelector(`.h-${li.classList[1]}`).classList.remove("hidden");
                // 元に戻す
                let fix_button =  document.getElementById('fix');
                let del_button =  document.getElementById('delete');
                let text = document.getElementById("text");

                if(text.textContent.trim() == ""){

                    const group  = document.getElementsByClassName(del_button.value);
                    disable = 0;
                    rock = 0;
                    fix_flag = 0;
                    // ol　+ form で計２回
                    group[0].remove();
                    group[0].remove();
                    return;
                }

                p.textContent = text.textContent;
                div_contents.classList.remove("is-active");
                div_material_items.remove()
                p.removeAttribute("id");
                rock = 0;
                fix_flag = 0;

                return;
            }

            // 初期
            if(fix_flag == 0){

                const del = document.getElementById("delete");
                del.addEventListener('click',(e) =>{
                    e.stopPropagation();

                    const group  = document.getElementsByClassName(del.value);
                    disable = 0;
                    rock = 0;
                    fix_flag = 0;
                    // ol　+ form で計２回
                    group[0].remove();
                    group[0].remove();

                    //完成ボタンを消す
                    if(document.getElementsByClassName("form_order").length == 0){
                        document.getElementById("complete_button").remove();
                    }

                    update();
                });

                const fix = document.getElementById("fix");
                fix.addEventListener('click',(e) =>{
                    e.stopPropagation();
                    fix.disabled = true;
                    const group = document.getElementsByClassName(fix.value);

                    let fix_point = document.querySelector(".algorithm_add_textbox");
                    let content = document.getElementById("text");
                    document.getElementById("order_input").classList.add("hidden");
                    // 編集可能にする
                    let new_inp = document.createElement("input");
                    new_inp.setAttribute("type","text");
                    new_inp.setAttribute("id","fix_order");
                    new_inp.setAttribute("class","input");
                    fix_point.appendChild(new_inp);
                    document.getElementById("fix_order").value = content.textContent;
                    setTimeout(() => {
                        console.log("a");
                        document.getElementById("fix_order").focus();
                    }, 60);

                    //fix_point.innerHTML = '<input type="text" id="fix_order" autofocus value="'+fix_point.textContent +'" ></input>'

                    /* document.getElementById("fix_order").addEventListener("click", (e)=>{
                        e.stopPropagation();
                    }) */

                    const fix_text = document.getElementById("fix_order");
                    // 編集後の処理
                    document.querySelector(".algorithm_add_button").addEventListener("click", function fix_func(){
                        console.log(fix_text.value)
                        if(fix_text.value.trim() == ""){
                            fix_button =  document.getElementById('fix');
                            const group  = document.getElementsByClassName(fix_button.value);
                            disable = 0;
                            rock = 0;
                            fix_flag = 0;
                            // ol　+ form で計２回
                            group[0].remove();
                            group[0].remove();
                            return;
                        }

                        group[1].value = fix_text.value;
                        console.log(group[1]);
                        // 元に戻す
                        content.textContent = fix_text.value;
                        fix_text.remove();
                        fix.disabled = false;
                        this.removeEventListener('click', fix_func);
                        document.getElementById("order_input").classList.remove("hidden");
                    } ,false);

                    fix_text.addEventListener("focusout",()=>{
                        console.log(fix_text.value)
                        if(fix_text.value.trim() == ""){
                            fix_button =  document.getElementById('fix');
                            const group  = document.getElementsByClassName(fix_button.value);
                            disable = 0;
                            rock = 0;
                            fix_flag = 0;
                            // ol　+ form で計２回
                            group[0].remove();
                            group[0].remove();
                            return;
                        }

                        group[1].value = fix_text.value;
                        console.log(group[1]);
                        // 元に戻す
                        content.textContent = fix_text.value;
                        fix_text.remove();
                        fix.disabled = false;
                        document.getElementById("order_input").classList.remove("hidden");

                    }, { once: true})

                });

                fix_flag = 1;
            }
        })
    }else{
        insert.value = "";
    }
} ,false);

sort()

order_json.forEach(val => {
    //上のこぴぺ
    alg_num = document.getElementsByClassName("ol_order").length;
    /* 要素が一つ以上の時に完成ボタンを追加 */
    if(document.getElementsByClassName("form_order").length == 0){
        let complete_button = document.createElement("button");
        complete_button.setAttribute("id","complete_button");
        complete_button.setAttribute("class","btn-white");
        complete_button.textContent = "完成!!";
        form.appendChild(complete_button);
    }

    if(val.trim() !== ""){

        // order_list(ulタグ)に指令を追加
        let li = document.createElement('li');
        li.className = "ol_order";
        li.classList.add(order_cnt);
        li.classList.add("algorithm_list__item");

        ol.appendChild(li);

        let div_num = document.createElement('div');
        div_num.className = "algorithm_number";
        div_num.textContent = (alg_num + 1) +".";
        li.appendChild(div_num);

        let div_contents = document.createElement('div');
        div_contents.className = "algorithm_contents";
        li.appendChild(div_contents);

        let handle = document.createElement("span");
        handle.setAttribute("class", "material-icons-round handle " + "h-" + order_cnt)
        handle.textContent = "drag_handle";
        div_contents.appendChild(handle);

        let p = document.createElement('p');
        p.className = "algorithm_name";
        p.textContent = val;
        div_contents.appendChild(p);

        // send_order(formタグ)に指令をhiddenで追加
        let input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'order[]';
        input.className = "form_order";
        input.classList.add(order_cnt);
        input.value = val ;

        form.appendChild(input);

        order_cnt++
        // inputをリセット
        val = "";

        // クリックしたらfocus にする処理
        li.addEventListener('click',function li_func(e){
            // 初期
            if(rock == 0){
            document.querySelector(`.h-${li.classList[1]}`).classList.add("hidden");
                rock = 1;

                disable =  li.classList[1];

                div_contents.classList.add('is-active');
                p.id = "text";

                div_material_items = document.createElement('div');
                div_material_items.className = "material_items";
                div_contents.appendChild(div_material_items);

                // 削除
                let del_button =  document.createElement('button');
                del_button.id = "delete";
                del_button.value = li.classList[1];
                div_material_items.appendChild(del_button);
                del_button.innerHTML = '<span class="material-icons-round delete">delete</span>削除';


                // 編集
                let fix_button =  document.createElement('button');
                fix_button.id = "fix";
                fix_button.value = li.classList[1];
                div_material_items.appendChild(fix_button);
                fix_button.innerHTML = '<span class="material-icons-round border">border_color</span>編集';
            }
            else if(disable == li.classList[1]){
                document.querySelector(`.h-${li.classList[1]}`).classList.remove("hidden");
                // 元に戻す
                let fix_button =  document.getElementById('fix');
                let del_button =  document.getElementById('delete');
                let text = document.getElementById("text");

                if(text.textContent.trim() == ""){

                    const group  = document.getElementsByClassName(del_button.value);
                    disable = 0;
                    rock = 0;
                    fix_flag = 0;
                    // ol　+ form で計２回
                    group[0].remove();
                    group[0].remove();
                    return;
                }

                p.textContent = text.textContent;
                div_contents.classList.remove("is-active");
                div_material_items.remove()
                p.removeAttribute("id");
                rock = 0;
                fix_flag = 0;

                return;
            }

            // 初期
            if(fix_flag == 0){

                const del = document.getElementById("delete");
                del.addEventListener('click',(e) =>{
                    e.stopPropagation();

                    const group  = document.getElementsByClassName(del.value);
                    disable = 0;
                    rock = 0;
                    fix_flag = 0;
                    // ol　+ form で計２回
                    group[0].remove();
                    group[0].remove();

                    //完成ボタンを消す
                    if(document.getElementsByClassName("form_order").length == 0){
                        document.getElementById("complete_button").remove();
                    }

                    update();
                });

                const fix = document.getElementById("fix");
                fix.addEventListener('click',(e) =>{
                    e.stopPropagation();
                    fix.disabled = true;
                    const group = document.getElementsByClassName(fix.value);

                    let fix_point = document.querySelector(".algorithm_add_textbox");
                    let content = document.getElementById("text");
                    document.getElementById("order_input").classList.add("hidden");
                    // 編集可能にする
                    let new_inp = document.createElement("input");
                    new_inp.setAttribute("type","text");
                    new_inp.setAttribute("id","fix_order");
                    new_inp.setAttribute("class","input");
                    fix_point.appendChild(new_inp);
                    document.getElementById("fix_order").value = content.textContent;
                    setTimeout(() => {
                        console.log("a");
                        document.getElementById("fix_order").focus();
                    }, 60);

                    //fix_point.innerHTML = '<input type="text" id="fix_order" autofocus value="'+fix_point.textContent +'" ></input>'

                    /* document.getElementById("fix_order").addEventListener("click", (e)=>{
                        e.stopPropagation();
                    }) */

                    const fix_text  = document.getElementById("fix_order");

                    // 編集後の処理
                    document.querySelector(".algorithm_add_button").addEventListener("click", function fix_func(){
                        console.log(fix_text.value)
                        if(fix_text.value.trim() == ""){
                            fix_button =  document.getElementById('fix');
                            const group  = document.getElementsByClassName(fix_button.value);
                            disable = 0;
                            rock = 0;
                            fix_flag = 0;
                            // ol　+ form で計２回
                            group[0].remove();
                            group[0].remove();
                            return;
                        }

                        group[1].value = fix_text.value;
                        console.log(group[1]);
                        // 元に戻す
                        content.textContent = fix_text.value;
                        fix_text.remove();
                        fix.disabled = false;
                        this.removeEventListener('click', fix_func);
                        document.getElementById("order_input").classList.remove("hidden");
                    } ,false);

                    fix_text.addEventListener("focusout",()=>{
                        console.log(fix_text.value)
                        if(fix_text.value.trim() == ""){
                            fix_button =  document.getElementById('fix');
                            const group  = document.getElementsByClassName(fix_button.value);
                            disable = 0;
                            rock = 0;
                            fix_flag = 0;
                            // ol　+ form で計２回
                            group[0].remove();
                            group[0].remove();
                            return;
                        }

                        group[1].value = fix_text.value;
                        console.log(group[1]);
                        // 元に戻す
                        content.textContent = fix_text.value;
                        fix_text.remove();
                        fix.disabled = false;
                        document.getElementById("order_input").classList.remove("hidden");

                    }, { once: true})

                });

                fix_flag = 1;
            }
        })
    }
});



