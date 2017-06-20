$(document).ready(function()
{
	var fired = false;

	$('.openproject').click(function()
	{
		var permalink = $(this).data('permalink');
		$(".fullscreenproject").load(permalink);
		$(".fullscreenproject").css('display', 'inline');
		$(".fullscreenproject").animate(
			{
				'opacity' : '0'
			}, 250);
		return false;
	});

	$('.fullscreenproject').click(function()
	{
		$(".fullscreenproject").animate(
			{
				'opacity' : '0'
			}, 250);
		setTimeout(function()
			{
				$(".fullscreenproject").css('display', 'none');
				$(".fullscreenproject").load('');
			}, 250, function()
			{
				fired = false;
			});
		return false;
	});


	// $(window).on('scroll mousewheel DOMMouseScroll onmousewheel', function(e)
	// {
	// 	if (e.originalEvent.wheelDelta < 0 && !fired)
	// 	{
	// 		fired = true;
	// 		console.log("SCROLLING DOWN\n");
	// 		var permalink = "http://localhost:8888/pb2017/projets/projet-4";
	// 		$(".fullscreenproject").load(permalink);
	// 		$(".fullscreenproject").css('display', 'inline');
	// 		$(".fullscreenproject").animate(
	// 			{
	// 				'opacity' : '1'
	// 			}, 250);
	// 	}
	// 	else
	// 	{
	// 		// scrolling up
	// 		console.log("SCROLLING UP\n");
	// 	}
	// });

	// ***********************
	// LE PARALLAX DE QUALITEY
	// ***********************

	$(window).scroll(function(e)
	{
		var scrolled = $(window).scrollTop();
		$('.projetsolo').each(function(i)
		{
			var target = $(this);
			if (scrolled > target.offset().top - $(window).height() && scrolled < target.offset().top + target.height())
			{
				console.log("PROJECT " + (i + 1) + " IS IN SCOPE");
			}
		})
		// css('top', 'calc(50% + ' + (0-(scrolled*0.3)) + 'px');
	})
});