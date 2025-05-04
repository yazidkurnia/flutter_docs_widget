      // Toggle sidebar
      document.getElementById('toggleSidebar').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('collapsed');
        document.getElementById('mainContent').classList.toggle('expanded');
        document.getElementById('containerWrapper').classList.toggle('centered');
        
        // For mobile devices, add active class to make sidebar visible
        if (window.innerWidth < 992) {
          document.getElementById('sidebar').classList.toggle('active');
        }
      });
      
      // Close sidebar on mobile when close button is clicked
      if (document.getElementById('closeSidebar')) {
        document.getElementById('closeSidebar').addEventListener('click', function() {
          document.getElementById('sidebar').classList.remove('active');
          document.getElementById('sidebar').classList.add('collapsed');
          document.getElementById('mainContent').classList.add('expanded');
          document.getElementById('containerWrapper').classList.add('centered');
        });
      }
      
      // Close sidebar when clicking on a link (mobile only)
      document.querySelectorAll('.sidebar .nav-link').forEach(link => {
        link.addEventListener('click', function() {
          if (window.innerWidth < 992) {
            document.getElementById('sidebar').classList.remove('active');
            document.getElementById('sidebar').classList.add('collapsed');
            document.getElementById('mainContent').classList.add('expanded');
            document.getElementById('containerWrapper').classList.add('centered');
          }
        });
      });
      
      // Add active class to current nav item
      const navLinks = document.querySelectorAll('.sidebar .nav-link');
      
      function highlightCurrentSection() {
        const scrollPosition = window.scrollY;
        
        document.querySelectorAll('.widget-card').forEach(section => {
          const sectionTop = section.offsetTop - 100;
          const sectionBottom = sectionTop + section.offsetHeight;
          
          if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
            const id = section.getAttribute('id');
            
            navLinks.forEach(link => {
              link.classList.remove('active');
              if (link.getAttribute('href') === '#' + id) {
                link.classList.add('active');
              }
            });
          }
        });
      }
      
      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          if (targetId === '#') return;
          
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            // Adjust offset based on screen size
            const offset = window.innerWidth < 768 ? 70 : 80;
            
            window.scrollTo({
              top: targetElement.offsetTop - offset,
              behavior: 'smooth'
            });
          }
        });
      });
      
      // Handle window resize
      window.addEventListener('resize', function() {
        // Reset sidebar state on window resize
        if (window.innerWidth >= 992) {
          document.getElementById('sidebar').classList.remove('active');
          document.getElementById('sidebar').classList.remove('collapsed');
          document.getElementById('mainContent').classList.remove('expanded');
          document.getElementById('containerWrapper').classList.remove('centered');
        } else {
          document.getElementById('sidebar').classList.add('collapsed');
          document.getElementById('sidebar').classList.remove('active');
          document.getElementById('mainContent').classList.add('expanded');
          document.getElementById('containerWrapper').classList.add('centered');
        }
      });
      
      // Initialize sidebar state based on screen size
      if (window.innerWidth < 992) {
        document.getElementById('sidebar').classList.add('collapsed');
        document.getElementById('mainContent').classList.add('expanded');
        document.getElementById('containerWrapper').classList.add('centered');
      }
      
      // Add event listener for scroll
      window.addEventListener('scroll', highlightCurrentSection);
      
      // Call once to set initial state
      highlightCurrentSection();
      
      // Handle navToggle button (mobile)
      if (document.getElementById('navToggle')) {
        document.getElementById('navToggle').addEventListener('click', function() {
          document.getElementById('sidebar').classList.add('active');
          document.getElementById('sidebar').classList.remove('collapsed');
          document.getElementById('containerWrapper').classList.remove('centered');
        });
      }