
function validasihasil() {
    let username = document.form.input1.value;
    let password = document.form.input2.value;
    
    if (username == "ahmad2017" && password == "integrity"){
        alert ("Login Berhasil.");
        document.write("Login Berhasil")
    }
    else {
        alert ("Login belum berhasil silahkan coba lagi.")
    }
}