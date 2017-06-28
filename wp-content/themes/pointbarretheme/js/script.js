$(document).ready(function()
{

	// LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION
	// LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION
	// LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION
	// LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION
	// LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION LOGO ANIMATION

	$('.animzone').mouseenter(function()
	{
		$all = $(this);
		$('.back').stop().velocity(
		{
			width: ['20px', '0px'],
			height: ['20px', '0px'],
		},
		{
			duration: 150,
			easing: 'easeInOutQuart',
			complete: function()
			{
				$('.stroke').delay(50).animate(
				{
					'width' : '25px'
				}, 150, 'easeInOutQuart', function()
				{
					$all.delay(50).velocity(
					{
						rotateZ: '-45deg'
					},
					{
						duration: 150,
						easing: 'easeInOutQuart'
					})
				})
			}
		})
	})

	$('.animzone').mouseleave(function()
	{
		$(this).stop().velocity(
		{
			rotateZ: '0deg'
		},
		{
			duration: 150,
			easing: 'easeInOutQuart',
			complete: function()
			{
				$('.stroke').delay(50).animate(
				{
					'width' : '0px'
				}, 150, 'easeInOutQuart', function()
				{
					$('.back').delay(50).velocity(
					{
						width: ['0px', '20px'],
						height: ['0px', '20px'],
					},
					{
						duration: 150,
						easing: 'easeInOutQuart',
					})
				})
			}
		})
	})

	function randomize(a, b)
	{
    	return Math.floor(Math.random() * (b - a + 1) + a);
	}

	$('.planet').mouseenter(function(e)
	{
		$('.satellite').each(function(i)
		{
			$this = $(this);
			var angle = randomize(0, 360);
			$this.velocity({rotateZ: '+=' + angle});
			$this.stop().delay(100 * i).velocity(
			{
				translateX: ['25px', '0px'],	
			}, 300, 'easeInOutQuart')
		})
	})

	// NAV OPENING/CLOSING

	$('#hamburger').mouseenter(function()
	{
		
			$('.nav-wrap').stop().velocity({
			translateX:['0%', '100%']
			},
			{
				duration: 300,
				easing: "easeInOutCubic",
			});
	});

$('.nav-wrap').mouseleave(function()
	{
	$('.nav-wrap').stop().velocity({
			translateX:['100%', '0%']
			},
			{
				duration: 300,

			});
});




	// FIT TEXT

	$("p#quote").fitText(1, { minFontSize: '45px'});

	// REVEAL HOME PROJECTS

	setTimeout(function()
	{
		$(".projetsolowrapper").first().find('.projetsolo').animate(
		{
			width : '100%'
		}, 300, 'easeInOutQuart', function()
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

					}, 300, 'easeInOutQuart', function()
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
								easing: 'easeInOutQuart',
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
										easing: 'easeInOutQuart',
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
	});

	// FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW FX GROW

	// SPLIT WORDS

	function growSplit()
	{
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
	}

	growSplit();


	// REVEAL GROW TEXT

	var revealFxGrow = function(element)
	{
		var $words = element.find('.grow').children('div');
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
									
								}
							}
						});
					}, 80*i);
				})(i);
			});
		}
	}

	revealFxGrow($('#quotewrapper'));	

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

	// LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY
	// LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY
	// LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY LE ROLL-OVER DE QUALITEY

	$('.projetsolowrapper').mouseover(function(e)
	{
		$this = $(this);
		$this.find('.titlecontainer').stop().animate(
		{
			'opacity' : '0',
		}, 300);
		$this.find('.encart').stop().animate(
		{
			'opacity' : '0',
		}, 300);
		$this.find('.rollover').stop().animate(
		{
			'opacity' : '1'
		}, 300);
		revealFxGrow($('.rollover'));
	});

	$('.projetsolowrapper').mouseout(function(e)
	{
		$this = $(this);
		$this.find('.titlecontainer').stop().animate(
		{
			'opacity' : '1',
		}, 300);
		$this.find('.encart').stop().animate(
		{
			'opacity' : '1',
		}, 300);
		$this.find('.rollover').stop().animate(
		{
			'opacity' : '0'
		}, 300);
	});
});