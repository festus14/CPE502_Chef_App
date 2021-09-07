    var sidedraw = function () {

  
      if (!Element.prototype.closest) {
        if (!Element.prototype.matches) {
          Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
        }
        Element.prototype.closest = function (s) {
          var el = this;
          var ancestor = this;
          if (!document.documentElement.contains(el)) return null;
          do {
            if (ancestor.matches(s)) return ancestor;
            ancestor = ancestor.parentElement;
          } while (ancestor !== null);
          return null;
        };
      }

      var settings = {
        speedOpen: 50,
        speedClose: 350,
        activeClass: 'is-active',
        visibleClass: 'is-visible',
        selectorTarget: '[data-sidedraw-target]',
        selectorTrigger: '[data-sidedraw-trigger]',
        selectorClose: '[data-sidedraw-close]',

      };

      var toggleAccessibility = function (event) {
        if (event.getAttribute('aria-expanded') === 'true') {
          event.setAttribute('aria-expanded', false);
        } else {
          event.setAttribute('aria-expanded', true);
        }   
      };

      // Open sidedraw
      var opensidedraw = function (trigger) {

        // Find target
        var target = document.getElementById(trigger.getAttribute('aria-controls'));

        // Make it active
        target.classList.add(settings.activeClass);

        // Make body overflow hidden so it's not scrollable
        document.documentElement.style.overflow = 'hidden';

        // Toggle accessibility
        toggleAccessibility(trigger);

        // Make it visible
        setTimeout(function () {
          target.classList.add(settings.visibleClass);
        }, settings.speedOpen); 

      };

      // Close sidedraw
      var closesidedraw = function (event) {

        // Find target
        var closestParent = event.closest(settings.selectorTarget),
          childrenTrigger = document.querySelector('[aria-controls="' + closestParent.id + '"');

        // Make it not visible
        closestParent.classList.remove(settings.visibleClass);

        // Remove body overflow hidden
        document.documentElement.style.overflow = '';

        // Toggle accessibility
        toggleAccessibility(childrenTrigger);

        // Make it not active
        setTimeout(function () {
          closestParent.classList.remove(settings.activeClass);
        }, settings.speedClose);             

      };

      // Click Handler
      var clickHandler = function (event) {

        // Find elements
        var toggle = event.target,
          open = toggle.closest(settings.selectorTrigger),
          close = toggle.closest(settings.selectorClose);

        // Open sidedraw when the open button is clicked
        if (open) {
          opensidedraw(open);
        }

        // Close sidedraw when the close button (or overlay area) is clicked
        if (close) {
          closesidedraw(close);
        }

        // Prevent default link behavior
        if (open || close) {
          event.preventDefault();
        }

      };

      // Keydown Handler, handle Escape button
      var keydownHandler = function (event) {

        if (event.key === 'Escape' || event.keyCode === 27) {

          // Find all possible sidedraws
          var sidedraws = document.querySelectorAll(settings.selectorTarget),
            i;

          // Find active sidedraws and close them when escape is clicked
          for (i = 0; i < sidedraws.length; ++i) {
            if (sidedraws[i].classList.contains(settings.activeClass)) {
              closesidedraw(sidedraws[i]);
            }
          }

        }

      };



      // Inits & Event Listeners
      document.addEventListener('click', clickHandler, false);
      document.addEventListener('keydown', keydownHandler, false);


    };
sidedraw();

window.onscroll = () => {
const nav = document.getElementById("scroll-change");
if(this.scrollY <= 10) {
  nav.style.backgroundColor = '';
  nav.style.position = 'sticky';
} 
  else{ 
    nav.style.backgroundColor = '#ffffff';
    nav.style.position = "fixed";
    nav.style.width = "100%";
    nav.style.zIndex = "99px";

  }
};

    