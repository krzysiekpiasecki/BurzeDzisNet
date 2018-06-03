
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:BurzeDzisNet" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BurzeDzisNet.html">BurzeDzisNet</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:BurzeDzisNet_Mappings" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BurzeDzisNet/Mappings.html">Mappings</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:BurzeDzisNet_Mappings_LocationMapper" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Mappings/LocationMapper.html">LocationMapper</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Mappings_StormMapper" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Mappings/StormMapper.html">StormMapper</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Mappings_WeatherAlertMapper" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Mappings/WeatherAlertMapper.html">WeatherAlertMapper</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:BurzeDzisNet_Model" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BurzeDzisNet/Model.html">Model</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:BurzeDzisNet_Model_Alert" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Model/Alert.html">Alert</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Model_Location" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Model/Location.html">Location</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Model_Storm" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Model/Storm.html">Storm</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Model_WeatherAlert" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Model/WeatherAlert.html">WeatherAlert</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:BurzeDzisNet_Remote" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BurzeDzisNet/Remote.html">Remote</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:BurzeDzisNet_Remote_SoapExtension" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BurzeDzisNet/Remote/SoapExtension.html">SoapExtension</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:BurzeDzisNet_Alert" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Alert.html">Alert</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_BurzeDzisNetFacade" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/BurzeDzisNetFacade.html">BurzeDzisNetFacade</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Location" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Location.html">Location</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_LocationDataMapper" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/LocationDataMapper.html">LocationDataMapper</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_SoapExtension" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/SoapExtension.html">SoapExtension</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_Storm" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/Storm.html">Storm</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_StormDataMapper" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/StormDataMapper.html">StormDataMapper</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_WeatherAlert" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/WeatherAlert.html">WeatherAlert</a>                    </div>                </li>                            <li data-name="class:BurzeDzisNet_WeatherAlertMapper" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="BurzeDzisNet/WeatherAlertMapper.html">WeatherAlertMapper</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "BurzeDzisNet.html", "name": "BurzeDzisNet", "doc": "Namespace BurzeDzisNet"},{"type": "Namespace", "link": "BurzeDzisNet/Mappings.html", "name": "BurzeDzisNet\\Mappings", "doc": "Namespace BurzeDzisNet\\Mappings"},{"type": "Namespace", "link": "BurzeDzisNet/Model.html", "name": "BurzeDzisNet\\Model", "doc": "Namespace BurzeDzisNet\\Model"},{"type": "Namespace", "link": "BurzeDzisNet/Remote.html", "name": "BurzeDzisNet\\Remote", "doc": "Namespace BurzeDzisNet\\Remote"},
            
            {"type": "Class", "fromName": "BurzeDzisNet", "fromLink": "BurzeDzisNet.html", "link": "BurzeDzisNet/BurzeDzisNetFacade.html", "name": "BurzeDzisNet\\BurzeDzisNetFacade", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNetFacade", "fromLink": "BurzeDzisNet/BurzeDzisNetFacade.html", "link": "BurzeDzisNet/BurzeDzisNetFacade.html#method___construct", "name": "BurzeDzisNet\\BurzeDzisNetFacade::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNetFacade", "fromLink": "BurzeDzisNet/BurzeDzisNetFacade.html", "link": "BurzeDzisNet/BurzeDzisNetFacade.html#method_getLocation", "name": "BurzeDzisNet\\BurzeDzisNetFacade::getLocation", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNetFacade", "fromLink": "BurzeDzisNet/BurzeDzisNetFacade.html", "link": "BurzeDzisNet/BurzeDzisNetFacade.html#method_getStorm", "name": "BurzeDzisNet\\BurzeDzisNetFacade::getStorm", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\BurzeDzisNetFacade", "fromLink": "BurzeDzisNet/BurzeDzisNetFacade.html", "link": "BurzeDzisNet/BurzeDzisNetFacade.html#method_getWeatherAlert", "name": "BurzeDzisNet\\BurzeDzisNetFacade::getWeatherAlert", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Mappings", "fromLink": "BurzeDzisNet/Mappings.html", "link": "BurzeDzisNet/Mappings/LocationMapper.html", "name": "BurzeDzisNet\\Mappings\\LocationMapper", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Mappings\\LocationMapper", "fromLink": "BurzeDzisNet/Mappings/LocationMapper.html", "link": "BurzeDzisNet/Mappings/LocationMapper.html#method_mapToLocation", "name": "BurzeDzisNet\\Mappings\\LocationMapper::mapToLocation", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Mappings", "fromLink": "BurzeDzisNet/Mappings.html", "link": "BurzeDzisNet/Mappings/StormMapper.html", "name": "BurzeDzisNet\\Mappings\\StormMapper", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Mappings\\StormMapper", "fromLink": "BurzeDzisNet/Mappings/StormMapper.html", "link": "BurzeDzisNet/Mappings/StormMapper.html#method_mapToStorm", "name": "BurzeDzisNet\\Mappings\\StormMapper::mapToStorm", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Mappings", "fromLink": "BurzeDzisNet/Mappings.html", "link": "BurzeDzisNet/Mappings/WeatherAlertMapper.html", "name": "BurzeDzisNet\\Mappings\\WeatherAlertMapper", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Mappings\\WeatherAlertMapper", "fromLink": "BurzeDzisNet/Mappings/WeatherAlertMapper.html", "link": "BurzeDzisNet/Mappings/WeatherAlertMapper.html#method_mapToWeatherAlert", "name": "BurzeDzisNet\\Mappings\\WeatherAlertMapper::mapToWeatherAlert", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Model", "fromLink": "BurzeDzisNet/Model.html", "link": "BurzeDzisNet/Model/Alert.html", "name": "BurzeDzisNet\\Model\\Alert", "doc": "&quot;Weather alert.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Alert", "fromLink": "BurzeDzisNet/Model/Alert.html", "link": "BurzeDzisNet/Model/Alert.html#method___construct", "name": "BurzeDzisNet\\Model\\Alert::__construct", "doc": "&quot;Weather alert.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Alert", "fromLink": "BurzeDzisNet/Model/Alert.html", "link": "BurzeDzisNet/Model/Alert.html#method_emptyAlert", "name": "BurzeDzisNet\\Model\\Alert::emptyAlert", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Alert", "fromLink": "BurzeDzisNet/Model/Alert.html", "link": "BurzeDzisNet/Model/Alert.html#method_level", "name": "BurzeDzisNet\\Model\\Alert::level", "doc": "&quot;Get alert level.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Alert", "fromLink": "BurzeDzisNet/Model/Alert.html", "link": "BurzeDzisNet/Model/Alert.html#method_startDate", "name": "BurzeDzisNet\\Model\\Alert::startDate", "doc": "&quot;Get start day.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Alert", "fromLink": "BurzeDzisNet/Model/Alert.html", "link": "BurzeDzisNet/Model/Alert.html#method_endDate", "name": "BurzeDzisNet\\Model\\Alert::endDate", "doc": "&quot;Get end day.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Model", "fromLink": "BurzeDzisNet/Model.html", "link": "BurzeDzisNet/Model/Location.html", "name": "BurzeDzisNet\\Model\\Location", "doc": "&quot;Location represents the coordinates (DMS) for the specified locality according to the list of village\non the website.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Location", "fromLink": "BurzeDzisNet/Model/Location.html", "link": "BurzeDzisNet/Model/Location.html#method___construct", "name": "BurzeDzisNet\\Model\\Location::__construct", "doc": "&quot;New Location representing the coordinates (DMS) for the specified locality.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Location", "fromLink": "BurzeDzisNet/Model/Location.html", "link": "BurzeDzisNet/Model/Location.html#method_x", "name": "BurzeDzisNet\\Model\\Location::x", "doc": "&quot;Get Coordinate-X.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Location", "fromLink": "BurzeDzisNet/Model/Location.html", "link": "BurzeDzisNet/Model/Location.html#method_y", "name": "BurzeDzisNet\\Model\\Location::y", "doc": "&quot;Get Coordinate-Y.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Location", "fromLink": "BurzeDzisNet/Model/Location.html", "link": "BurzeDzisNet/Model/Location.html#method_equals", "name": "BurzeDzisNet\\Model\\Location::equals", "doc": "&quot;Indicates whether some other Location is equal to this one.&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Model", "fromLink": "BurzeDzisNet/Model.html", "link": "BurzeDzisNet/Model/Storm.html", "name": "BurzeDzisNet\\Model\\Storm", "doc": "&quot;Storm represents information about registered lightnings with a specified radius of monitoring\ncovered by the specified location.&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Storm", "fromLink": "BurzeDzisNet/Model/Storm.html", "link": "BurzeDzisNet/Model/Storm.html#method___construct", "name": "BurzeDzisNet\\Model\\Storm::__construct", "doc": "&quot;New Storm.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Storm", "fromLink": "BurzeDzisNet/Model/Storm.html", "link": "BurzeDzisNet/Model/Storm.html#method_lightnings", "name": "BurzeDzisNet\\Model\\Storm::lightnings", "doc": "&quot;Get the number of cloud-end-ground lightning in specified radius for a selected location.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Storm", "fromLink": "BurzeDzisNet/Model/Storm.html", "link": "BurzeDzisNet/Model/Storm.html#method_distance", "name": "BurzeDzisNet\\Model\\Storm::distance", "doc": "&quot;Get the distance to the nearest registered lightning.&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Storm", "fromLink": "BurzeDzisNet/Model/Storm.html", "link": "BurzeDzisNet/Model/Storm.html#method_direction", "name": "BurzeDzisNet\\Model\\Storm::direction", "doc": "&quot;Get direction to the nearest lightning (E, E, N, NW, W, SW, S, SE).&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\Storm", "fromLink": "BurzeDzisNet/Model/Storm.html", "link": "BurzeDzisNet/Model/Storm.html#method_period", "name": "BurzeDzisNet\\Model\\Storm::period", "doc": "&quot;Get the number of minutes of time containing the data (10, 15, 20 minutes).&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Model", "fromLink": "BurzeDzisNet/Model.html", "link": "BurzeDzisNet/Model/WeatherAlert.html", "name": "BurzeDzisNet\\Model\\WeatherAlert", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method___construct", "name": "BurzeDzisNet\\Model\\WeatherAlert::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_frost", "name": "BurzeDzisNet\\Model\\WeatherAlert::frost", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_wind", "name": "BurzeDzisNet\\Model\\WeatherAlert::wind", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_heat", "name": "BurzeDzisNet\\Model\\WeatherAlert::heat", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_precipitation", "name": "BurzeDzisNet\\Model\\WeatherAlert::precipitation", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_storm", "name": "BurzeDzisNet\\Model\\WeatherAlert::storm", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_tornado", "name": "BurzeDzisNet\\Model\\WeatherAlert::tornado", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Model\\WeatherAlert", "fromLink": "BurzeDzisNet/Model/WeatherAlert.html", "link": "BurzeDzisNet/Model/WeatherAlert.html#method_warning", "name": "BurzeDzisNet\\Model\\WeatherAlert::warning", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "BurzeDzisNet\\Remote", "fromLink": "BurzeDzisNet/Remote.html", "link": "BurzeDzisNet/Remote/SoapExtension.html", "name": "BurzeDzisNet\\Remote\\SoapExtension", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "BurzeDzisNet\\Remote\\SoapExtension", "fromLink": "BurzeDzisNet/Remote/SoapExtension.html", "link": "BurzeDzisNet/Remote/SoapExtension.html#method___construct", "name": "BurzeDzisNet\\Remote\\SoapExtension::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Remote\\SoapExtension", "fromLink": "BurzeDzisNet/Remote/SoapExtension.html", "link": "BurzeDzisNet/Remote/SoapExtension.html#method_keyApi", "name": "BurzeDzisNet\\Remote\\SoapExtension::keyApi", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Remote\\SoapExtension", "fromLink": "BurzeDzisNet/Remote/SoapExtension.html", "link": "BurzeDzisNet/Remote/SoapExtension.html#method_location", "name": "BurzeDzisNet\\Remote\\SoapExtension::location", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Remote\\SoapExtension", "fromLink": "BurzeDzisNet/Remote/SoapExtension.html", "link": "BurzeDzisNet/Remote/SoapExtension.html#method_weatherWarnings", "name": "BurzeDzisNet\\Remote\\SoapExtension::weatherWarnings", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Remote\\SoapExtension", "fromLink": "BurzeDzisNet/Remote/SoapExtension.html", "link": "BurzeDzisNet/Remote/SoapExtension.html#method_findStorm", "name": "BurzeDzisNet\\Remote\\SoapExtension::findStorm", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BurzeDzisNet\\Remote\\SoapExtension", "fromLink": "BurzeDzisNet/Remote/SoapExtension.html", "link": "BurzeDzisNet/Remote/SoapExtension.html#method_locationList", "name": "BurzeDzisNet\\Remote\\SoapExtension::locationList", "doc": "&quot;&quot;"},
            
            
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


