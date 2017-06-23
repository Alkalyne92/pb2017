$(document).ready(function()
{
	// NAV OPENING/CLOSING

	var open = 0;
	$('.animtest').click(function()
	{
		if (open % 2 == 0)
		{
			$('.nav-wrap').animate({
			'right':'0'
			}, 500);
		}
		else
		{
			$('.nav-wrap').animate({
			'right':'-800px'
			}, 500);	
		}
		open++;
	});

	// FIT TEXT

	$("p#quote").fitText(1, { minFontSize: '45px'});




	// var fired = false;

	// $('.openproject').click(function()
	// {
	// 	var permalink = $(this).data('permalink');
	// 	$(".fullscreenproject").load(permalink);
	// 	$(".fullscreenproject").css('display', 'inline');
	// 	$(".fullscreenproject").animate(
	// 		{
	// 			'opacity' : '0'
	// 		}, 250);
	// 	return false;
	// });

	// $('.fullscreenproject').click(function()
	// {
	// 	$(".fullscreenproject").animate(
	// 		{
	// 			'opacity' : '0'
	// 		}, 250);
	// 	setTimeout(function()
	// 		{
	// 			$(".fullscreenproject").css('display', 'none');
	// 			$(".fullscreenproject").load('');
	// 		}, 250, function()
	// 		{
	// 			fired = false;
	// 		});
	// 	return false;
	// });


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

	// ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO AN

	// var triangle = [[1, 1], [2, 1], [1.5, 2]],
 //    	pentagon = [[0, 0], [1, 1], [3, 1], [2, 0.5], [0, 1]];

	// var interpolator = flubber.interpolate(triangle, pentagon);

	// d3.select("path").transition().attrTween("d", function(){ return interpolator; });

	// REVEAL HOME PROJECTS

	setTimeout(function()
	{
		console.log("SET TIME OUT");
		$(".projetsolowrapper").first().find('.projetsolo').animate(
		{
			width : '100%'
		}, 300, function()
		{
			$(this).find('.projetsolooverlay').animate(
			{
				'opacity' : '0'
			}, 300, function()
			{
				$(this).css('display', 'none');
				$(".projetsolowrapper").first().animate(
				{
					'margin-top' : '0px'
				}, 300)
			})
		});
	}, 1500);

	$(window).scroll(function(e)
	{
		$(".projetsolo").each(function(i)
		{
			var $this = $(this);
			if (!$this.hasClass('open'))
			{
				if ($(window).scrollTop() > $this.offset().top - $(window).height() + ($this.height()*0.5))
				{
					$this.parent().animate(
					{
						'margin-top' : '0px',
						'opacity' : '1',
					}, 800);
					$this.delay(200).animate(
					{
						'width' : '100%',

					}, 300, function()
					{
						$(this).find('.projetsolooverlay').animate(
						{
							'opacity' : '0'
						}, 300, function()
						{
							$(this).css('display', 'none');
							$('.titlecontainer').eq(i).velocity(
							{
								translateY: ['-50%', '-50%'],
								scaleX: [1, 0],
							},
							{
								duration: 300,
								complete: function()
								{	
									if (i % 2 == 0) $(this).find('.titleoverlay').css('transform-origin', 'left');
									else $(this).find('.titleoverlay').css('transform-origin', 'right');
									$(this).find('.titleoverlay').velocity(
									{
										scaleX: [0, 1]
									},
									{
										duration: 300,
										complete: function()
										{
											$(this).css('display', 'none');
											$('.encart').eq(i).animate(
											{
												'bottom' : '10%',
												'opacity' : '1'
											}, 300);
										}
									})	
								}
							})
						})
						
					})
					
					$this.addClass('open');
				}
			}

			// PARALLAX POUR LES THUMBNAIL DES PROJETS

			var on = $this.offset().top - $(window).height();
			var off = $this.offset().top + $this.height();
			if ($(window).scrollTop() > on && $(window).scrollTop() < off)
			{
				$this.css('background-position-y', ($(window).scrollTop() - on)/(off - on)*100 + '%');
			}

		});
	})

	// $(window).scroll(function(e)
	// {
	// 	$(".titlecontainer").each(function(i)
	// 	{
	// 		var $this = $(this);
	// 		if (!$this.hasClass('open'))
	// 		{
	// 			if ($(window).scrollTop() > $this.offset().top - $(window).height())
	// 			{
	// 				$this.delay(600).velocity(
	// 				{
	// 					translateY: ['-50%', '-50%'],
	// 					scaleX: [1, 0],
	// 				},
	// 				{
	// 					duration: 300,
	// 					complete: function()
	// 					{	
	// 						if (i % 2 == 0) $(this).find('.titleoverlay').css('transform-origin', 'left');
	// 						else $(this).find('.titleoverlay').css('transform-origin', 'right');
	// 						$(this).find('.titleoverlay').velocity(
	// 						{
	// 							scaleX: [0, 1]
	// 						},
	// 						{
	// 							duration: 300,
	// 							complete: function()
	// 							{
	// 								$(this).css('display', 'none');
	// 							}
	// 						})	
	// 					}
	// 				})
	// 				$this.addClass('open');
	// 			}
	// 		}
	// 	})
	// })






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