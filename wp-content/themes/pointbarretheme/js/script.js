$(document).ready(function()
{
	// FIT TEXT
	$("p#quote").fitText(1, { minFontSize: '45px'});




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

	// PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX PARALLAX 

	var last = 0;
	var delta = -50;
	$(window).on('scroll', function(e)
	{
		var scrolled = $(this).scrollTop();
		$('.projetsolo').each(function(i)
		{
			var target = $(this);
			if (scrolled > target.offset().top - $(window).height() && scrolled < target.offset().top + target.height())
			{
				if (scrolled > last)
				{
					delta -= 1;
					$(this).find('.encart').css('transform', 'translateY(' + delta + '%) translateX(-50%)');
					console.log("scrolling DOWN");
				}
				else
				{
					delta += 1;
					$(this).find('.encart').css('transform', 'translateY(' + delta + '%) translateX(-50%)');
					console.log("scrolling UP");
				}
			}
		})
		last = scrolled;
		// css('top', 'calc(50% + ' + (0-(scrolled*0.3)) + 'px');
	})

	// ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO AN

	// var triangle = [[1, 1], [2, 1], [1.5, 2]],
 //    	pentagon = [[0, 0], [1, 1], [3, 1], [2, 0.5], [0, 1]];

	// var interpolator = flubber.interpolate(triangle, pentagon);

	// d3.select("path").transition().attrTween("d", function(){ return interpolator; });

	// FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW

	// SPLIT WORDS

	$('.grow').each(function(i)
	{
		var $tag, text, words;
		$tag = $(this);
		text = $tag.text().trim();
		$tag.text('');
		words = text.split(/\s+/);
		for (var i=words.length; i--;)
		{
			$('<div><span>'+words[i]+'&nbsp;</span></div>').prependTo($tag);
		}
	});

	// REVEAL GROW TEXT

	var revealFxGrow = function()
	{
		var textDefer = $.Deferred();
		var $words = $(document).find('.grow').children('div');
		if ($words.length)
		{
			$words.each(function(i)
			{
				(function(i)
				{
					setTimeout(function()
					{
						$words.eq(i).children('span').velocity(
						{
							properties: {
								opacity: [1, 0],
								translateZ: 0,
								translateY: ['0%', [0.86, 0, 0.07, 1], '100%']
							},
							options: {
								duration: 800,
								easing: 'ease-out',
								complete: function(el) {
									i==$words.length-1 && textDefer.resolve();
								}
							}
						});
					}, 80*i);
				})(i);
			});
		}
		else textDefer.resolve();
		return textDefer.promise();
	}

	// REVEAL IMAGE

	var revealFxSlide = function()
	{
		var imageDefer = $.Deferred();
		var $image = $(document).find('.slide');
		if ($image.length){
			$image.velocity({
				properties: {
					opacity: [1, 0],
					translateZ: 0,
					translateY: ['0%', [0.86, 0, 0.07, 1], scrollDirection*100+'%']
				},
				options: {
					duration: 800,
					easing: 'ease-out',
					delay: 100,
					complete: function(el) {
						console.log('image reveal end');
						$screen.closest('#projectHighList').length ? $projectNav.addClass('active') : $projectNav.removeClass('active');
						//$screen.find('.projectSensor:hover').trigger('mouseenter');
						imageDefer.resolve();
					}
				}
			});
		}
		else imageDefer.resolve();
		return imageDefer.promise();
	}

	// SCREEN TOTALLY REVEALED
	var pageDefer = $.Deferred();
	$.when(revealFxGrow(), revealFxSlide()).then(function()
	{
		pageDefer.resolve();
	});
	return pageDefer.promise();
});