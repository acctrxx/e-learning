 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  document.getElementById("hamburger").onclick = function toggleMenu() {
      const navToggle = document.getElementsByClassName("toggle");
      for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle("hidden");
      }
    };

    const counters = document.querySelectorAll('.value');
    const speed = 1000;

    window.onscroll = function() {myFunction()};

    function myFunction() {
      const triggerOffset = document.getElementById("count").offsetTop - screen.height / 2;
      if (document.body.scrollTop > triggerOffset || document.documentElement.scrollTop > triggerOffset) {
        counters.forEach( counter => {
          const animate = () => {
              const value = +counter.getAttribute('akhi');
              const data = +counter.innerText;
            
              const time = value / speed;
            if(data < value) {
                  counter.innerText = Math.ceil(data + time);
                  setTimeout(animate, 1);
                }else{
                  counter.innerText = value;
                }
            
          }
          
          animate();
        });
      } 
    }

    var navbar = document.getElementById('navbar');
    document.onscroll = function() {
        if (document.documentElement.scrollTop > 0) {
            navbar.classList.add('shadow-lg','transition-all')
        } else {
            navbar.classList.remove('shadow-lg','transition-all')
        }
    }

</script>