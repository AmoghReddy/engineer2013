$events.each do |i,value|
	$events[i].each do |event,value|
		f=File.new("app/"+event+".html","w")
		reversed=$events[i][event]
		f.write('
    <div data-role="page" data-add-back-btn="true" data-dom-cache="true">

        <div data-role="header" data-position="fixed">
            <h1>'+event+'</h1>
        </div>
    
        <div data-role="content">
	<div data-role="collapsible-set">');
		reversed.each do |tab,value2|
			if (tab!='image')
				f.write('<div data-role="collapsible">')
				val=value2.dup
				val.gsub! '<p>','<br />'
				val.gsub! '</p>','<br />'
				f.write("<h3>"+tab.capitalize+"</h3><p class='divContentWhite'>"+val+"</p></div>");
			end
		end
		f.write('
		</div>
		</div>      

    </div>
')
		f.close
	end
end
