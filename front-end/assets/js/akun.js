const GetOrder = (url) => {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 1) {
      res_order_menu.style.display = "none";
    }
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res_order_menu").innerHTML = this.responseText;
      res_order_menu.style.display = "block";
      var getscriptres = document.getElementsByTagName("script");
      for (var i = 0; i < getscriptres.length - 0; i++) {
        if (getscriptres[i + 0].text != null) eval(getscriptres[i + 0].text);
      }
    }
  };
  xhttp.open("POST", url, true);
  xhttp.send();
};

window.onload = function () {
  GetOrder("../sistem/akun/belum-bayar.php");
};

belum_bayar.onclick = function () {
  belum_bayar.className = "isi_select_order_menu_active";
  dikemas.className = "isi_select_order_menu";
  dikirim.className = "isi_select_order_menu";
  selesai.className = "isi_select_order_menu";
  GetOrder("../sistem/akun/belum-bayar.php");
};

dikemas.onclick = function () {
  belum_bayar.className = "isi_select_order_menu";
  dikemas.className = "isi_select_order_menu_active";
  dikirim.className = "isi_select_order_menu";
  selesai.className = "isi_select_order_menu";
  GetOrder("../sistem/akun/dikemas.php");
};

dikirim.onclick = function () {
  belum_bayar.className = "isi_select_order_menu";
  dikemas.className = "isi_select_order_menu";
  dikirim.className = "isi_select_order_menu_active";
  selesai.className = "isi_select_order_menu";
  GetOrder("../sistem/akun/dikirim.php");
};

selesai.onclick = function () {
  belum_bayar.className = "isi_select_order_menu";
  dikemas.className = "isi_select_order_menu";
  dikirim.className = "isi_select_order_menu";
  selesai.className = "isi_select_order_menu_active";
  GetOrder("../sistem/akun/selesai.php");
};
