<html>
    <head>
        <link rel="stylesheet" href="css/styletopnav.css">
        
    </head>
<body>

<div id="headeer" style="padding-right: 4px;    padding-bottom: 6px;     padding-top: 6px;   border-radius: 0px;text-align: end;">
<!--button id='filterbtnn' onclick='fltrr()' style=' background-image: linear-gradient(to right, #09d7e1, #bdf319); padding: 8px 16px; border: none; border-radius: 50px;'>Filter 18+ | Off</button-->
<button class="filterBtn" onclick="filterAdult()" style="    background: rgb(39,210,255);
background: linear-gradient(90deg, rgba(39,210,255,1) 0%, rgba(3,78,187,1) 29%, rgba(255,0,134,1) 100%);color:white;      padding: 8px 16px;     border: none;     border-radius: 50px;">On | Off</button>

<button id="displaynonee" onclick="displayNone()" style=" width: 33px;   background: rgb(39,210,255);
background: linear-gradient(90deg, rgba(39,210,255,1) 0%, rgba(3,78,187,1) 29%, rgba(255,0,134,1) 100%);color:white;      padding: 8px 8px;     border: none;     border-radius: 50px;">🚫</button>
<button class="snowbtn" onclick="snowfall()" style=" width: 33px;   background: rgb(39,210,255);
background: linear-gradient(90deg, rgba(39,210,255,1) 0%, rgba(3,78,187,1) 29%, rgba(255,0,134,1) 100%);color:white;      padding: 8px 8px;     border: none;     border-radius: 50px;"><!--i aria-hidden='true' class='fa fa-tint'/-->🎅</button>
<a href=""><button id="restorestorage" style=" width: 33px;   background: rgb(39,210,255);
background: linear-gradient(90deg, rgba(39,210,255,1) 0%, rgba(3,78,187,1) 29%, rgba(255,0,134,1) 100%);color:white;      padding: 8px 8px;     border: none;     border-radius: 50px;">🔑</button></a>
<button class="topsearch openBtnsrh"  onclick="opentopSearch()" style=" width: 33px;   background: rgb(39,210,255);
background: linear-gradient(90deg, rgba(39,210,255,1) 0%, rgba(3,78,187,1) 29%, rgba(255,0,134,1) 100%);color:white;     padding: 8px 8px;     border: none;     border-radius: 50px;">🔍</button>
</div>




<script>
    function displayNone() {
    let visibilityCheck = localStorage.getItem("visibilityCheck") || "";
    if (visibilityCheck == 'false') {
        document.querySelector('#displaynonee').innerHTML = '👀';
        document.querySelector('#hidediv').style.display = 'none';
        localStorage.setItem("visibilityCheck", true);
    } else {
        document.querySelector('#displaynonee').innerHTML = '🚫';
        document.querySelector('#hidediv').style.display = '';
        localStorage.setItem("visibilityCheck", false);
    }
}
</script>

</body>
</html>