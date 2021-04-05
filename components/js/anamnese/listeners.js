
function adicionaListeresCheckBoxs(checkboxs) {
    for (let i = 0; i < checkboxs.length; i++) {
        checkboxs[i].addEventListener("input", function () {
            checkboxs[i].value = checkboxs[i].checked;
            console.log(checkboxs[i].value);
        });

    }
}
