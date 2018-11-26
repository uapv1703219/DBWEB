    
<!-- chatbox -->
    <div id="chatBox1" class="rounded bg-white ui-widget-content" draggable="true">
      <div id="chatBoxHeader" class="container-fluid bg-dark text-white mb-2" >
        <div class="row">
          <div class="col-sm-10">
            <i class="material-icons">chat</i>
            Chat
          </div>
          <div class="col-sm-2">
            <div class="text-right">
              <a id="closeLink" href="#">
                <i class="material-icons">close</i>
              </a>
            </div>
          </div>
        </div>
      </div>
<!-- messages -->
      <div id="insideBox" class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <div class="msg-left">
            Hi..
        </div>
      </div>
       <div class="col-sm-12">
         <div class="msg-right">
            Hello
        </div>
      </div>
      </div>
    </div>
  </div> 
        <div id="messageBox" class="container-fluid bg-light">
              <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="Message ..." aria-label="Message ..." aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="material-icons">send</i></button>
                </div>
              </div>
            </div>
      </div> 


         <script>

    window.onload = addListeners;

    function addListeners(){ //attend evenement de clique
        document.getElementById('chatBox1').addEventListener('mousedown', click, false);
        window.addEventListener('mouseup', letgo, false);

    }

    function letgo()
    {
        window.removeEventListener('mousemove', move, true);
    }

    function click(e){
      window.addEventListener('mousemove', move, true);
    }

    function move(e)
    {
      var div = document.getElementById('chatBox1');
      //div.style.position = 'absolute';
      div.style.top = e.clientY + 'px';
      div.style.left = e.clientX + 'px';
    }

    </script>
