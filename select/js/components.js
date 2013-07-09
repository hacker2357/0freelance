events = {
	'window_click': function(e)
	{
		if (cselect.close_menu == true)
		{
			cselect.close_all_selects();
		}
		cselect.close_menu = true;
	},
	'c_select_container_click': function(e)
	{
		cselect.toggle_select($(this).parent().attr('id'));
	},
	'c_select': function(e)
	{
		cselect.close_menu = false;
	},
	'c_select_list_left_element': function(e)
	{
		cselect.open_right(this);
	},
	'c_select_list_right_element': function(e)
	{
		cselect.right_check(this);
	},
	'add_event_to_element_by_class': function(className, elevent)
	{
		var elements = document.getElementsByClassName(className);
		
		for (var i = 0; i < elements.length; i++)
		{
			elements.item(i).addEventListener('click', elevent, true);
		}
	},
};

cselect = {
	'close_menu': true,
	
	'close_select': function(id)
	{
		$('#' + id + ' .c-select-list').hide();
	},
	
	'close_all_selects': function()
	{
		$('.c-select-list').hide();
	},
	
	'open_select': function(id)
	{
		$('#' + id + ' .c-select-list').show();
	},
	
	'toggle_select': function(id)
	{
		$('#' + id + ' .c-select-list').toggle();
	},
	
	'remove_left_class': function(el)
	{
		$('#' + $(el).parent().parent().parent().attr('id') + ' .c-select-list-left-element').removeClass('c-select-list-left-element-active');
	},
	
	'remove_right_class': function(el)
	{
		$('#' + $(el).parent().parent().parent().attr('id') + ' .c-select-list-right-element').removeClass('c-select-list-right-element-active');
	},
	
	'active_left': function(el)
	{
		$(el).addClass('c-select-list-left-element-active');
	},
	
	'active_right': function(el)
	{
		$(el).addClass('c-select-list-right-element-active');
	},
	
	'show_right': function(el, id)
	{
		var right = '#' + $(el).parent().parent().parent().attr('id') + ' .c-select-right';
		var left = '#' + $(el).parent().parent().parent().attr('id') + ' .c-select-left';
		var select_list = $(el).parent().parent();
		
		$(right).empty();
		for (var i = 0; i < razdels[id]['podrazdels'].length; i++)
		{
			var elem = document.createElement('div');
			elem.setAttribute('class', 'c-select-list-right-element');
			elem.innerHTML = razdels[id]['podrazdels'][i]['name'];
			elem.addEventListener('click', events.c_select_list_right_element, true);
				
			var c_left_hidden = document.createElement('input');
			c_left_hidden.setAttribute('type', 'hidden');
			c_left_hidden.setAttribute('value', i);
			
			elem.appendChild(c_left_hidden);	
			
			$(right).append(elem);
		}
		
		$(select_list).css('width', $(left).width() + $(right).width() + 2 + 'px');
		
		$(right).show();
	},
	
	'open_right': function(el)
	{
		var id = $(el.getElementsByTagName('input').item(0)).val();
		
		cselect.remove_left_class(el);
		
		cselect.remove_right_class(el);
		
		cselect.active_left(el);
		
		cselect.show_right(el, id);
	},
	
	'right_check': function(el)
	{
		cselect.remove_right_class(el);
		//$('#' + $(el).parent().parent().parent().attr('id') + ' .c-select-list-right-element').removeClass('c-select-list-right-element-active');
		cselect.active_right(el);
		//$('#' + $(el).parent().parent().parent().attr('id') + ' .c-select-right').show();
	},
	
	'add': function()
	{
		window.addEventListener('click', events.window_click);
		
		//events.add_event_to_element_by_class('c-select-container', events.c_select_container_click);
		//events.add_event_to_element_by_class('c-select', events.c_select);
		//events.add_event_to_element_by_class('c-select-list-left-element', events.c_select_list_left_element);
		//events.add_event_to_element_by_class('c-select-list-right-element', events.c_select_list_right_element);
		
	},
	
	'create': function(id, text, className, style)
	{
		className = className || '';
		style = style || '';
		
		var c_select = document.createElement('div');
		c_select.setAttribute('class', 'c-select ', + className);
		c_select.setAttribute('style', style);
		c_select.setAttribute('id', id);
		c_select.addEventListener('click', events.c_select, true);
		
			var c_select_container = document.createElement('div');
			c_select_container.setAttribute('class', 'c-select-container');
			c_select_container.addEventListener('click', events.c_select_container_click, true);
		
				var c_select_text = document.createElement('div');
				c_select_text.setAttribute('class', 'c-select-text');
				c_select_text.innerHTML = text;
				
				var c_select_arrow = document.createElement('div');
				c_select_arrow.setAttribute('class', 'c-select-arrow');
				
			var c_select_list = document.createElement('div');
			c_select_list.setAttribute('class', 'c-select-list');
			
				var c_select_left = document.createElement('div');
				c_select_left.setAttribute('class', 'c-select-left');
				
				for (var i = 0; i < razdels.length; i++)
				{
					var c_select_list_left_element = document.createElement('div');
					c_select_list_left_element.setAttribute('class', 'c-select-list-left-element');
					c_select_list_left_element.innerHTML = razdels[i]['name'];
					c_select_list_left_element.addEventListener('click', events.c_select_list_left_element, true);
					
						var c_select_arrow = document.createElement('div');
						c_select_arrow.setAttribute('class', 'c-select-arrow');
						
						c_select_list_left_element.appendChild(c_select_arrow);
						
						var c_left_hidden = document.createElement('input');
						c_left_hidden.setAttribute('type', 'hidden');
						c_left_hidden.setAttribute('value', i);
						
						c_select_list_left_element.appendChild(c_left_hidden);
					
					c_select_left.appendChild(c_select_list_left_element);
				}
				
			var c_select_right = document.createElement('div');
			c_select_right.setAttribute('class', 'c-select-right');
			/*
			for (var i = 0; i < razdels.length; i++)
			{
				var c_select_list_right_element = document.createElement('div');
				c_select_list_right_element.setAttribute('class', 'c-select-list-right-element');
				c_select_list_right_element.innerHTML = razdels[i]['name'];
				c_select_right.appendChild(c_select_list_right_element);
			}
			*/
					
			c_select_container.appendChild(c_select_text);
			c_select_container.appendChild(c_select_arrow);
		c_select.appendChild(c_select_container);
			
			c_select_list.appendChild(c_select_left);
			c_select_list.appendChild(c_select_right);
		c_select.appendChild(c_select_list);
		
		$('body').append(c_select);
	},
	
	'load': function()
	{
		window.addEventListener('load', function()
		{
			cselect.create('id', 'Не выбрано');
			cselect.add();
		});
	}

};

cselect.load();

