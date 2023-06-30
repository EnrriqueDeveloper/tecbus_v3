document.addEventListener('DOMContentLoaded', function () {

    const coordBus = [-12.029612777348195, -76.99903971112951];
    const coordUser = [-12.053656427112138, -76.97550683793365];



    const map = L.map('map').setView(coordBus, 40);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

    const busIcon = L.icon({
        className: "bus-pointers",
        iconUrl: '/img/bus.png',
        iconSize: [45, 45]
    });

    const marker = L.marker(coordBus, { icon: busIcon }).addTo(map);

    function startService() {
        
        const latlng = [
            { lat: -12.029612777348195, lng: -76.99903971112951 },
            { lat: -12.02954915359886, lng: -76.9988289417165 },
            { lat: -12.029429540921154, lng: -76.99838658619187 },
            { lat: -12.029320107999217, lng: -76.99804050804615 },
            { lat: -12.029271753900458, lng: -76.99789479092067 },
            { lat: -12.029187770449939, lng: -76.99757213159684 },
            { lat: -12.029172500728842, lng: -76.9973821789304 },
            { lat: -12.029159775960597, lng: -76.9970777342458 },
            { lat: -12.02918777045088, lng: -76.99675247281459 },
            { lat: -12.029203040171112, lng: -76.9965573159655 },
            { lat: -12.029274298854046, lng: -76.9963491486598 },
            { lat: -12.029223399794244, lng: -76.99650267204927 },
            { lat: -12.029376096940904, lng: -76.99592760985426 },
            { lat: -12.029442265675954, lng: -76.99577148437498 },
            { lat: -12.029554243498161, lng: -76.99543321250322 },
            { lat: -12.029658586432275, lng: -76.99520162636232 },
            { lat: -12.029826553016338, lng: -76.99486595657376 },
            { lat: -12.02996143519456, lng: -76.99460834953297 },
            { lat: -12.030081047635631, lng: -76.99441059059254 },
            { lat: -12.030111586973753, lng: -76.99438456967934 },
            { lat: -12.03018030047185, lng: -76.99428048602648 },
            { lat: -12.030315182477965, lng: -76.99399165387891 },
            { lat: -12.0304755138248, lng: -76.99373925102076 },
            { lat: -12.030597670982242, lng: -76.99356230880326 },
            { lat: -12.030760547108182, lng: -76.99329169129511 },
            { lat: -12.030984501607861, lng: -76.99296642987994 },
            { lat: -12.03108629904604, lng: -76.99284152949652 },
            { lat: -12.031149922425337, lng: -76.99274785420896 },
            { lat: -12.031305163413577, lng: -76.99254489107776 },
            { lat: -12.031529117459556, lng: -76.99228988612828 },
            { lat: -12.031580016080353, lng: -76.99220661920599 },
            { lat: -12.03169199302306, lng: -76.99208432090339 },
            { lat: -12.031890497469394, lng: -76.9919151849675 },
            { lat: -12.032139900283939, lng: -76.99168099674858 },
            { lat: -12.032246787133637, lng: -76.99155089218252 },
            { lat: -12.032361308720477, lng: -76.99142078760603 },
            { lat: -12.03260307634091, lng: -76.99119180356463 },
            { lat: -12.03272523252659, lng: -76.99110853664236 },
            { lat: -12.032811759791205, lng: -76.99103307599404 },
            { lat: -12.032923736209934, lng: -76.99093940070648 },
            { lat: -12.033002628658759, lng: -76.99086133796683 },
            { lat: -12.033078976167825, lng: -76.99080409195777 },
            { lat: -12.033206221979736, lng: -76.99069480410957 },
            { lat: -12.0333131084054, lng: -76.99062975182653 },
            { lat: -12.033442899008003, lng: -76.9905412807216 },
            { lat: -12.033702480034398, lng: -76.99033831759337 },
            { lat: -12.033832270448979, lng: -76.99023423394051 },
            { lat: -12.034000234430268, lng: -76.99011974191896 },
            { lat: -12.034155473766425, lng: -76.99001565826612 },
            { lat: -12.034318347727615, lng: -76.98989596206533 },
            { lat: -12.03457792790564, lng: -76.98979708259381 },
            { lat: -12.03482732822657, lng: -76.98964355920586 },
            { lat: -12.034952664842049, lng: -76.98960527015352 },
            { lat: -12.0354998175511, lng: -76.98936327565757 },
            { lat: -12.03584846775977, lng: -76.98923837527416 },
            { lat: -12.03601897536136, lng: -76.98917592508245 },
            { lat: -12.036089132992267, lng: -76.98916196402374 },
            { lat: -12.036275383286082, lng: -76.98909490879944 },
            { lat: -12.036456386969052, lng: -76.98904126462001 },
            { lat: -12.036763305978916, lng: -76.98896884497776 },
            { lat: -12.037248604560926, lng: -76.98881595906373 },
            { lat: -12.037760134557155, lng: -76.98871939953642 },
            { lat: -12.038617928815059, lng: -76.98847800072532 },
            { lat: -12.039436372160047, lng: -76.98826342400776 },
            { lat: -12.040115783173714, lng: -76.98799788531595 },
            { lat: -12.040695510904383, lng: -76.98773502883206 },
            { lat: -12.041259498214343, lng: -76.9874158459612 },
            { lat: -12.041862832169523, lng: -76.98705106553443 },
            { lat: -12.04240058520322, lng: -76.9866701918549 },
            { lat: -12.042717990153028, lng: -76.9863939243231 },
            { lat: -12.043308204958178, lng: -76.98579042729698 },
            { lat: -12.043859070939034, lng: -76.98519229468847 },
            { lat: -12.044126634011828, lng: -76.98487042960248 },
            { lat: -12.044554209738363, lng: -76.98439567860648 },
            { lat: -12.045031624773108, lng: -76.98389410552144 },
            { lat: -12.045501169505725, lng: -76.98333084162941 },
            { lat: -12.046002191187233, lng: -76.98276489552946 },
            { lat: -12.046298606710824, lng: -76.98241889057209 },
            { lat: -12.046660600460367, lng: -76.9820058303771 },
            { lat: -12.046831104586945, lng: -76.98181002912216 },
            { lat: -12.04712227292198, lng: -76.98148816404556 },
            { lat: -12.04753935134766, lng: -76.98102682409205 },
            { lat: -12.047709854928797, lng: -76.98079615410701 },
            { lat: -12.048103324288903, lng: -76.98038309392535 },
            { lat: -12.048365636875248, lng: -76.98003977117696 },
            { lat: -12.048667296043698, lng: -76.97971254167136 },
            { lat: -12.049202412333408, lng: -76.97910904464182 },
            { lat: -12.049700803987607, lng: -76.97855382738466 },
            { lat: -12.050078531799725, lng: -76.97811662730648 },
            { lat: -12.050521836659057, lng: -76.97763651190053 },
            { lat: -12.050975633199382, lng: -76.97716444310753 },
            { lat: -12.05152910654683, lng: -76.97670310315519 },
            { lat: -12.052242587075357, lng: -76.97622298774922 },
            { lat: -12.052497026382703, lng: -76.97607546624519 },
            { lat: -12.053016396568383, lng: -76.97580456312953 },
            { lat: -12.053299688964598, lng: -76.9756731348899 },
            { lat: -12.053522650362389, lng: -76.97556852874001 },
            { lat: -12.05361445794292, lng: -76.97553366002337 },
            { lat: -12.053656427112138, lng: -76.97550683793365 }
        ];
        L.Routing.control({
            waypoints: [
                L.latLng(coordBus[0], coordBus[1]),
                L.latLng(coordUser[0], coordUser[1])
            ]
        }).on('routesfound', function (e) {
            latlng.forEach(function (coord, index) {
                setTimeout(function () {
                    marker.setLatLng([coord.lat, coord.lng]);
                    if (coord.lat === coordUser[0] && coord.lng === coordUser[1]) {
                        alert('El bus se encuentra en tu ruta!');
                    }
                }, 1000 * index);
            });
        }).addTo(map);
    }

    startService();
});
