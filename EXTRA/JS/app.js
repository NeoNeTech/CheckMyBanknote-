function sendCode(event) {
    if (event.keyCode == 13) {
      var valueCode = document.getElementById("code-input").value;
        alert(valueCode);
      document.getElementById("code-input").value="";
    }
}

function closeWindow(){
    const remote = require('electron').remote
    let w = remote.getCurrentWindow()
    w.close()
  }
