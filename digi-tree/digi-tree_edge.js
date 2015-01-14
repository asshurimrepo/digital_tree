/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
            'open-sans, sans-serif': '<script src=\"http://use.edgefonts.net/open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all.js\"></script>'        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "both",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'root2',
                            type: 'image',
                            rect: ['354px', '468px', '4767px', '4767px', 'auto', 'auto'],
                            autoOrient: true,
                            fill: ["rgba(0,0,0,0)",im+"root2.svg",'0px','0px'],
                            transform: [[],[],[],['0.03','0.03']]
                        },
                        {
                            id: '_1',
                            type: 'image',
                            rect: ['187px', '611px', '157px', '157px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"1.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'Pasted2',
                            type: 'image',
                            rect: ['367px', '301px', '157px', '157px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted2.svg",'0px','0px']
                        },
                        {
                            id: 'video',
                            symbolName: 'video',
                            type: 'rect',
                            rect: ['534px', '178px', '0', '0', 'auto', 'auto']
                        },
                        {
                            id: 'video2',
                            symbolName: 'video2',
                            type: 'rect',
                            rect: ['532px', '179px', '252', '252', 'auto', 'auto'],
                            opacity: '0',
                            transform: [[],[],[],['0.89202','0.89202']]
                        },
                        {
                            id: 'Pasted4',
                            type: 'image',
                            rect: ['456px', '213px', '69px', '69px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted4.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted5',
                            type: 'image',
                            rect: ['632px', '92px', '69px', '69px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted5.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted6',
                            type: 'image',
                            rect: ['365px', '38px', '68px', '68px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted6.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted7',
                            type: 'image',
                            rect: ['277px', '37px', '69px', '69px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted7.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted8',
                            type: 'image',
                            rect: ['278px', '123px', '158px', '158px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted8.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted9',
                            type: 'image',
                            rect: ['455px', '3px', '158px', '157px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted9.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted10',
                            type: 'image',
                            rect: ['10px', '30px', '245px', '246px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted10.svg",'0px','0px']
                        },
                        {
                            id: 'Pasted13',
                            type: 'image',
                            rect: ['99px', '301px', '68px', '68px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"Pasted13.svg",'0px','0px']
                        },
                        {
                            id: 'Text',
                            type: 'text',
                            rect: ['14px', '62px', '241px', '196px', 'auto', 'auto'],
                            opacity: '0',
                            text: "Hi, We’re The-digitaltree. <br>A digital-forward <br>creative agency<br>making brands live up <br>to their full potential. <br>That’s it. And this <br>is our website.",
                            align: "center",
                            font: ['open-sans, sans-serif', [19, "px"], "rgba(0,0,0,1)", "300", "none", "", "break-word", "normal"]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '798px', '611px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 4500,
                    autoPlay: true,
                    data: [
                        [
                            "eid6",
                            "scaleX",
                            0,
                            1000,
                            "easeOutElastic",
                            "${_1}",
                            '0',
                            '1'
                        ],
                        [
                            "eid66",
                            "scaleY",
                            1908,
                            1000,
                            "easeOutElastic",
                            "${Pasted8}",
                            '0',
                            '1'
                        ],
                        [
                            "eid80",
                            "scaleX",
                            2500,
                            1595,
                            "easeOutElastic",
                            "${Pasted13}",
                            '0',
                            '1'
                        ],
                        [
                            "eid57",
                            "scaleX",
                            1500,
                            1000,
                            "easeOutElastic",
                            "${Pasted6}",
                            '0',
                            '1'
                        ],
                        [
                            "eid51",
                            "scaleY",
                            1095,
                            1000,
                            "easeOutElastic",
                            "${Pasted4}",
                            '0',
                            '1'
                        ],
                        [
                            "eid50",
                            "scaleX",
                            1095,
                            1000,
                            "easeOutElastic",
                            "${Pasted4}",
                            '0',
                            '1'
                        ],
                        [
                            "eid17",
                            "width",
                            0,
                            482,
                            "easeOutCubic",
                            "${root2}",
                            '85px',
                            '4767px'
                        ],
                        [
                            "eid70",
                            "scaleX",
                            2095,
                            1000,
                            "easeOutElastic",
                            "${Pasted9}",
                            '0',
                            '1'
                        ],
                        [
                            "eid62",
                            "top",
                            1838,
                            912,
                            "easeOutElastic",
                            "${Pasted7}",
                            '347px',
                            '37px'
                        ],
                        [
                            "eid20",
                            "scaleX",
                            0,
                            0,
                            "easeOutElastic",
                            "${root2}",
                            '0.03',
                            '0.03'
                        ],
                        [
                            "eid8",
                            "top",
                            88,
                            912,
                            "easeOutElastic",
                            "${_1}",
                            '611px',
                            '301px'
                        ],
                        [
                            "eid60",
                            "scaleX",
                            1750,
                            1000,
                            "easeOutElastic",
                            "${Pasted7}",
                            '0',
                            '1'
                        ],
                        [
                            "eid147",
                            "left",
                            2095,
                            0,
                            "linear",
                            "${video2}",
                            '532px',
                            '532px'
                        ],
                        [
                            "eid67",
                            "top",
                            1996,
                            912,
                            "easeOutElastic",
                            "${Pasted8}",
                            '432px',
                            '123px'
                        ],
                        [
                            "eid74",
                            "scaleY",
                            2363,
                            1000,
                            "easeOutElastic",
                            "${Pasted10}",
                            '0',
                            '1'
                        ],
                        [
                            "eid150",
                            "opacity",
                            2095,
                            405,
                            "easeOutQuad",
                            "${video2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid146",
                            "top",
                            2095,
                            0,
                            "linear",
                            "${video2}",
                            '179px',
                            '179px'
                        ],
                        [
                            "eid64",
                            "left",
                            2750,
                            0,
                            "easeOutElastic",
                            "${Pasted7}",
                            '277px',
                            '277px'
                        ],
                        [
                            "eid59",
                            "top",
                            1588,
                            912,
                            "easeOutElastic",
                            "${Pasted6}",
                            '348px',
                            '38px'
                        ],
                        [
                            "eid71",
                            "scaleY",
                            2095,
                            1000,
                            "easeOutElastic",
                            "${Pasted9}",
                            '0',
                            '1'
                        ],
                        [
                            "eid73",
                            "scaleX",
                            2363,
                            1000,
                            "easeOutElastic",
                            "${Pasted10}",
                            '0',
                            '1'
                        ],
                        [
                            "eid81",
                            "scaleY",
                            2500,
                            1595,
                            "easeOutElastic",
                            "${Pasted13}",
                            '0',
                            '1'
                        ],
                        [
                            "eid82",
                            "top",
                            2640,
                            1455,
                            "easeOutElastic",
                            "${Pasted13}",
                            '611px',
                            '301px'
                        ],
                        [
                            "eid9",
                            "top",
                            482,
                            912,
                            "easeOutElastic",
                            "${Pasted2}",
                            '611px',
                            '301px'
                        ],
                        [
                            "eid54",
                            "scaleX",
                            1250,
                            1000,
                            "easeOutElastic",
                            "${Pasted5}",
                            '0',
                            '1'
                        ],
                        [
                            "eid10",
                            "scaleY",
                            394,
                            1000,
                            "easeOutElastic",
                            "${Pasted2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid61",
                            "scaleY",
                            1750,
                            1000,
                            "easeOutElastic",
                            "${Pasted7}",
                            '0',
                            '1'
                        ],
                        [
                            "eid154",
                            "opacity",
                            4095,
                            405,
                            "easeOutCubic",
                            "${Text}",
                            '0',
                            '1'
                        ],
                        [
                            "eid53",
                            "left",
                            2095,
                            0,
                            "easeOutElastic",
                            "${Pasted4}",
                            '456px',
                            '456px'
                        ],
                        [
                            "eid69",
                            "left",
                            2908,
                            0,
                            "easeOutElastic",
                            "${Pasted8}",
                            '278px',
                            '278px'
                        ],
                        [
                            "eid21",
                            "scaleY",
                            0,
                            0,
                            "easeOutElastic",
                            "${root2}",
                            '0.03',
                            '0.03'
                        ],
                        [
                            "eid7",
                            "scaleY",
                            0,
                            1000,
                            "easeOutElastic",
                            "${_1}",
                            '0',
                            '1'
                        ],
                        [
                            "eid55",
                            "scaleY",
                            1250,
                            1000,
                            "easeOutElastic",
                            "${Pasted5}",
                            '0',
                            '1'
                        ],
                        [
                            "eid23",
                            "location",
                            0,
                            0,
                            "easeOutQuad",
                            "${root2}",
                            [[398.33, 539.28, 0, 0, 0, 0,0],[398.33, 539.28, 0, 0, 0, 0,0]]
                        ],
                        [
                            "eid52",
                            "top",
                            1183,
                            912,
                            "easeOutElastic",
                            "${Pasted4}",
                            '521px',
                            '213px'
                        ],
                        [
                            "eid58",
                            "scaleY",
                            1500,
                            1000,
                            "easeOutElastic",
                            "${Pasted6}",
                            '0',
                            '1'
                        ],
                        [
                            "eid16",
                            "height",
                            0,
                            482,
                            "easeOutCubic",
                            "${root2}",
                            '137px',
                            '4767px'
                        ],
                        [
                            "eid77",
                            "left",
                            4095,
                            0,
                            "easeOutElastic",
                            "${Pasted10}",
                            '10px',
                            '10px'
                        ],
                        [
                            "eid72",
                            "top",
                            2183,
                            912,
                            "easeOutElastic",
                            "${Pasted9}",
                            '313px',
                            '3px'
                        ],
                        [
                            "eid75",
                            "top",
                            2451,
                            912,
                            "easeOutElastic",
                            "${Pasted10}",
                            '347px',
                            '37px'
                        ],
                        [
                            "eid151",
                            "top",
                            3363,
                            511,
                            "easeOutQuad",
                            "${Pasted10}",
                            '37px',
                            '30px'
                        ],
                        [
                            "eid65",
                            "scaleX",
                            1908,
                            1000,
                            "easeOutElastic",
                            "${Pasted8}",
                            '0',
                            '1'
                        ],
                        [
                            "eid56",
                            "top",
                            1338,
                            912,
                            "easeOutElastic",
                            "${Pasted5}",
                            '402px',
                            '92px'
                        ],
                        [
                            "eid12",
                            "scaleX",
                            394,
                            1000,
                            "easeOutElastic",
                            "${Pasted2}",
                            '0',
                            '1'
                        ]
                    ]
                }
            },
            "video": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            rect: ['44px', '49px', '158px', '157px', 'auto', 'auto'],
                            borderRadius: ['10px', '10px', '10px', '10px'],
                            id: 'RoundRect3',
                            stroke: [0, 'rgb(0, 0, 0)', 'none'],
                            type: 'rect',
                            fill: ['rgba(0,0,0,1.00)']
                        }
                    ],
                    style: {
                        '${symbolSelector}': {
                            isStage: 'true',
                            rect: [undefined, undefined, '0px', '0px']
                        }
                    }
                },
                timeline: {
                    duration: 1750,
                    autoPlay: true,
                    data: [
                        [
                            "eid143",
                            "background-color",
                            1750,
                            0,
                            "easeOutElastic",
                            "${RoundRect3}",
                            'rgba(0,0,0,1.00)',
                            'rgba(0,0,0,1.00)'
                        ],
                        [
                            "eid126",
                            "top",
                            838,
                            912,
                            "easeOutElastic",
                            "${RoundRect3}",
                            '444px',
                            '49px'
                        ],
                        [
                            "eid141",
                            "left",
                            1750,
                            0,
                            "easeOutElastic",
                            "${RoundRect3}",
                            '44px',
                            '44px'
                        ],
                        [
                            "eid129",
                            "scaleX",
                            750,
                            1000,
                            "easeOutElastic",
                            "${RoundRect3}",
                            '0',
                            '1.56'
                        ],
                        [
                            "eid127",
                            "scaleY",
                            750,
                            1000,
                            "easeOutElastic",
                            "${RoundRect3}",
                            '0',
                            '1.56'
                        ],
                        [
                            "eid133",
                            "height",
                            1750,
                            0,
                            "easeOutElastic",
                            "${RoundRect3}",
                            '157px',
                            '157px'
                        ],
                        [
                            "eid142",
                            "width",
                            1750,
                            0,
                            "easeOutElastic",
                            "${RoundRect3}",
                            '158px',
                            '158px'
                        ]
                    ]
                }
            },
            "video2": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            rect: ['0px', '7px', '245px', '245px', 'auto', 'auto'],
                            borderRadius: ['10px', '10px', '10px', '10px'],
                            stroke: [0, 'rgba(0,0,0,1)', 'none'],
                            id: 'RoundRect',
                            opacity: '0',
                            type: 'rect',
                            fill: ['rgba(192,192,192,1)']
                        }
                    ],
                    style: {
                        '${symbolSelector}': {
                            isStage: 'true',
                            rect: [undefined, undefined, '252px', '252px']
                        }
                    }
                },
                timeline: {
                    duration: 0,
                    autoPlay: true,
                    data: [

                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("digi-tree_edgeActions.js");
})("EDGE-187302");
