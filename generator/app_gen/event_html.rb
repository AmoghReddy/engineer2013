$events.each do |i,value|
	$events[i].each do |event,value|
		f=File.new("app/"+event+".html","w")
		reversed=$events[i][event]
		f.write('<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Engineer 2013</title>
    </head>
    <body>
    <div data-role="page" data-add-back-btn="true" data-dom-cache="true">

        <div data-role="header" data-position="fixed">
            <h1>'+event+'</h1>
        </div>
    
        <div data-role="content">
	<div data-role="collapsible-set">
	');
		reversed.each do |tab,value2|
			if (tab!='image')
				f.write('<div data-role="collapsible">')
				f.write("<h3>"+tab.upcase+"</h3><p>"+value2+"</p></div>");
			end
		end
		f.write('
		</div>
		</div>      

    </div>
        <!--<script src="js/jquery.mobile-1.0rc1.min.js"></script>-->
    </body>
</html>')
		f.close
	end
end
