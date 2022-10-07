function hidden() {
  let x = document.getElementById('headerElementHide');
  console.log(x);
  if (x.style.visibility === 'visible') {
    x.style.visibility = 'hidden';
  } else {
    x.style.visibility = 'visible';
  }
  console.log("ok");
}
