function validasi_isi(form){
  pola_nama=/^[a-zA-Z ]+$/;
  if (!pola_nama.test(form.pengguna.value)){
    alert ('Karakter nama tak diperbolehkan!');
    form.pengguna.focus();
    return false;

  }
  pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!pola_email.test(form.email.value)){
    alert ('Penulisan Email tidak benar!');
    form.email.focus();
    return false;
  }
  var mincar = 2;
  if (form.kunci.value.length < mincar){
    alert("Isikan minimal 2 karakter password!");
    form.kunci.focus();
    return (false);
  }
return (true);
}