const numberFormat = new Intl.NumberFormat("vi-VN", {
  style: "currency",
  currency: "VND",
});
function changetrans(intrans) {
  var intransValue = numberFormat.format(intrans.value);
  document.querySelector("#trans-price").innerHTML = intransValue;
}
