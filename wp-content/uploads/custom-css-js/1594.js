<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 

	if ( window.location.pathname.includes('work') )
    {
    	let elementorImageCarousel = document.querySelectorAll('.elementor img');
        elementorImageCarousel.forEach ( (el) => {
        	el.style.height = "375px";      	
            el.style.objectFit = "cover";
            el.style.width = "100%";  
        } );
      	

    }</script>
<!-- end Simple Custom CSS and JS -->
