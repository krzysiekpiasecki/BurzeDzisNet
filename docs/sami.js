
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:BurzeDzisNet" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BurzeDzisNet.html">BurzeDzisNet</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:BurzeDzisNet_Alert" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Alert.html">Alert</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_BurzeDzisNet" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/BurzeDzisNet.html">BurzeDzisNet</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Endpoint" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Endpoint.html">Endpoint</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Point" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Point.html">Point</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Storm" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Storm.html">Storm</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_WeatherAlert" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/WeatherAlert.html">WeatherAlert</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "BurzeDzisNet.html", "name": "BurzeDzisNet", "doc": "Namespace BurzeDzisNet"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/Alert.html", "name": "BurzeDzisNet\\Alert", "doc": "&quot;Weather alert.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Alert", "fromLink": "BurzeDzisNet/Alert.html", "link": "BurzeDzisNet/Alert.html#method___construct", "name": "BurzeDzisNet\\Alert::__construct", "doc": "&quot;Weather alert.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Alert", "fromLink": "BurzeDzisNet/Alert.html", "link": "BurzeDzisNet/Alert.html#method_level", "name": "BurzeDzisNet\\Alert::level", "doc": "&quot;Get alert level.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Alert", "fromLink": "BurzeDzisNet/Alert.html", "link": "BurzeDzisNet/Alert.html#method_startDate", "name": "BurzeDzisNet\\Alert::startDate", "doc": "&quot;Get start day.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Alert", "fromLink": "BurzeDzisNet/Alert.html", "link": "BurzeDzisNet/Alert.html#method_endDate", "name": "BurzeDzisNet\\Alert::endDate", "doc": "&quot;Get end day.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNet.html", "name": "BurzeDzisNet\\BurzeDzisNet", "doc": "&quot;BurzeDzisNetInterface represents remote client.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNet", "fromLink": "BurzeDzisNet/BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNet.html#method___construct", "name": "BurzeDzisNet\\BurzeDzisNet::__construct", "doc": "&quot;Remote client.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNet", "fromLink": "BurzeDzisNet/BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNet.html#method_verifyApiKey", "name": "BurzeDzisNet\\BurzeDzisNet::verifyApiKey", "doc": "&quot;Indicates whether given API key is valid.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNet", "fromLink": "BurzeDzisNet/BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNet.html#method_locate", "name": "BurzeDzisNet\\BurzeDzisNet::locate", "doc": "&quot;Get Point representing location coordinates.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNet", "fromLink": "BurzeDzisNet/BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNet.html#method_getStorm", "name": "BurzeDzisNet\\BurzeDzisNet::getStorm", "doc": "&quot;Get information about storm for the given locality and monitoring radius.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNet", "fromLink": "BurzeDzisNet/BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNet.html#method_getWeatherAlert", "name": "BurzeDzisNet\\BurzeDzisNet::getWeatherAlert", "doc": "&quot;Get set of weather alerts for the given Point.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/Endpoint.html", "name": "BurzeDzisNet\\Endpoint", "doc": "&quot;Endpoint interface is the entry point end a burze.dzis.net service.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Endpoint", "fromLink": "BurzeDzisNet/Endpoint.html", "link": "BurzeDzisNet/Endpoint.html#method___construct", "name": "BurzeDzisNet\\Endpoint::__construct", "doc": "&quot;Constructor.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Endpoint", "fromLink": "BurzeDzisNet/Endpoint.html", "link": "BurzeDzisNet/Endpoint.html#method_client", "name": "BurzeDzisNet\\Endpoint::client", "doc": "&quot;Get Soap client in WSDL mode.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Endpoint", "fromLink": "BurzeDzisNet/Endpoint.html", "link": "BurzeDzisNet/Endpoint.html#method_wsdl", "name": "BurzeDzisNet\\Endpoint::wsdl", "doc": "&quot;Get URI of WSDL file.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Endpoint", "fromLink": "BurzeDzisNet/Endpoint.html", "link": "BurzeDzisNet/Endpoint.html#method_apiKey", "name": "BurzeDzisNet\\Endpoint::apiKey", "doc": "&quot;Get API key.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Endpoint", "fromLink": "BurzeDzisNet/Endpoint.html", "link": "BurzeDzisNet/Endpoint.html#method_options", "name": "BurzeDzisNet\\Endpoint::options", "doc": "&quot;Get options.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/Point.html", "name": "BurzeDzisNet\\Point", "doc": "&quot;Point represents the coordinates (DMS) for the specified locality according to the list of village\non the website.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Point", "fromLink": "BurzeDzisNet/Point.html", "link": "BurzeDzisNet/Point.html#method___construct", "name": "BurzeDzisNet\\Point::__construct", "doc": "&quot;Point.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Point", "fromLink": "BurzeDzisNet/Point.html", "link": "BurzeDzisNet/Point.html#method_x", "name": "BurzeDzisNet\\Point::x", "doc": "&quot;Get x.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Point", "fromLink": "BurzeDzisNet/Point.html", "link": "BurzeDzisNet/Point.html#method_y", "name": "BurzeDzisNet\\Point::y", "doc": "&quot;Get y.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Point", "fromLink": "BurzeDzisNet/Point.html", "link": "BurzeDzisNet/Point.html#method_equals", "name": "BurzeDzisNet\\Point::equals", "doc": "&quot;Indicates whether some other Point is equal to this one.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/Storm.html", "name": "BurzeDzisNet\\Storm", "doc": "&quot;Storm represents information about registered lightnings with a specified radius of monitoring\ncovered by the specified location.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Storm", "fromLink": "BurzeDzisNet/Storm.html", "link": "BurzeDzisNet/Storm.html#method___construct", "name": "BurzeDzisNet\\Storm::__construct", "doc": "&quot;New Storm.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Storm", "fromLink": "BurzeDzisNet/Storm.html", "link": "BurzeDzisNet/Storm.html#method_lightnings", "name": "BurzeDzisNet\\Storm::lightnings", "doc": "&quot;Get the number of cloud-end-ground lightning in specified radius for a selected location.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Storm", "fromLink": "BurzeDzisNet/Storm.html", "link": "BurzeDzisNet/Storm.html#method_distance", "name": "BurzeDzisNet\\Storm::distance", "doc": "&quot;Get the distance to the nearest registered lightning.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Storm", "fromLink": "BurzeDzisNet/Storm.html", "link": "BurzeDzisNet/Storm.html#method_direction", "name": "BurzeDzisNet\\Storm::direction", "doc": "&quot;Get direction to the nearest lightning (E, E, N, NW, W, SW, S, SE).&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Storm", "fromLink": "BurzeDzisNet/Storm.html", "link": "BurzeDzisNet/Storm.html#method_period", "name": "BurzeDzisNet\\Storm::period", "doc": "&quot;Get the number of minutes of time containing the data (10, 15, 20 minutes).&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Storm", "fromLink": "BurzeDzisNet/Storm.html", "link": "BurzeDzisNet/Storm.html#method_radius", "name": "BurzeDzisNet\\Storm::radius", "doc": "&quot;Get radius covered by specified location.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/WeatherAlert.html", "name": "BurzeDzisNet\\WeatherAlert", "doc": "&quot;WeatherAlert represents set of alerts.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\WeatherAlert", "fromLink": "BurzeDzisNet/WeatherAlert.html", "link": "BurzeDzisNet/WeatherAlert.html#method___construct", "name": "BurzeDzisNet\\WeatherAlert::__construct", "doc": "&quot;WeatherAlert.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\WeatherAlert", "fromLink": "BurzeDzisNet/WeatherAlert.html", "link": "BurzeDzisNet/WeatherAlert.html#method_withAlert", "name": "BurzeDzisNet\\WeatherAlert::withAlert", "doc": "&quot;Get WeatherAlert containing new alert.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\WeatherAlert", "fromLink": "BurzeDzisNet/WeatherAlert.html", "link": "BurzeDzisNet/WeatherAlert.html#method_getAlert", "name": "BurzeDzisNet\\WeatherAlert::getAlert", "doc": "&quot;Get alert by name.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\WeatherAlert", "fromLink": "BurzeDzisNet/WeatherAlert.html", "link": "BurzeDzisNet/WeatherAlert.html#method_getIterator", "name": "BurzeDzisNet\\WeatherAlert::getIterator", "doc": "&quot;Iterates over alerts.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\WeatherAlert", "fromLink": "BurzeDzisNet/WeatherAlert.html", "link": "BurzeDzisNet/WeatherAlert.html#method_toArray", "name": "BurzeDzisNet\\WeatherAlert::toArray", "doc": "&quot;Get all alerts.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\WeatherAlert", "fromLink": "BurzeDzisNet/WeatherAlert.html", "link": "BurzeDzisNet/WeatherAlert.html#method_hasAlert", "name": "BurzeDzisNet\\WeatherAlert::hasAlert", "doc": "&quot;Check if specified alert exists.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


