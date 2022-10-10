<!doctype html>
<html>

<head>
    <title>Network</title>
    <script src="{{asset('https://unpkg.com/vis-network/standalone/umd/vis-network.min.js')}}"></script>
    <style type="text/css">
    #mynetwork {
        width: 100%;
        height: 100vh;
        border: 1px solid lightgray;
    }
    </style>
</head>

<body>
    <div id="mynetwork"></div>
    <script type="text/javascript">
    // create an array with nodes
    var nodes = new vis.DataSet([{
            id: 1,
            label: "اسلام",
            hidden: false,
            color:'black',
            font: {size:24, color:'white'},
        },
        {
            id: 2,
            label: "عقائد",
            color: '#3bd4f3',
            hidden: false,
            title: 'دین ومذہب سے متعلق وہ نظریات جو دل میں جما لئے جائیں'
        },
        {
            id: 3,
            label: "عبادات",
            color: '#f728d2',
            hidden: false,
            title: 'وہ اعمال جن میں انتہائی  عاجزی ہو انھیں عبادات کہا جاتاہے'
        },
        {
            id: 4,
            label: "معاملات",
            color: '#f66e18',
            hidden: false,
            title: 'انسان اپنی ضروریات  کو پورا کرنے کے لیے جو آپس میں لین دین وغیرہ کرتے ہیں انھیں معاملات کہا جاتا ہے '
        },
        {
            id: 5,
            label: "معاشرت",
            color:'#a96387',
            hidden: false,
            title: 'وہ چیزیں جو انسانوں کے باہمی میل جول اور روز مرہ کی زندگی  سےتعلق رکھتی ہیں معاشرت کہلاتی ہیں '
        },
        {
            id: 6,
            label: "اخلاق",
            color: '#939452',
            hidden: false,
            title: 'انسان کی باطنی صفات و عادات اخلاق کہلاتی ہیں'
        },
        //عقائد
        {
            id: 7,
            label: "اللہ تعالیٰ پر ایمان",
            hidden: true
        },
        {
            id: 8,
            label: "فرشتوں پر ایمان",
            hidden: true
        },
        {
            id: 9,
            label: "کتابوں پر ایمان",
            hidden: true
        },
        {
            id: 10,
            label: "رسولوں پر ایمان",
            hidden: true
        },
        {
            id: 11,
            label: "آخرت کے دن پر ایمان",
            hidden: true
        },
        {
            id: 12,
            label: "تقدیر پر ایمان",
            hidden: true
        },
        {
            id: 13,
            label: "دوبارہ زندہ ہونے پر ایمان",
            hidden: true
        },
        //عبادات
        {
            id: 14,
            label: "نماز",
            hidden: true
        },
        {
            id: 15,
            label: "روزہ",
            hidden: true
        },
        {
            id: 16,
            label: "حج",
            hidden: true
        },
        {
            id: 17,
            label: "زکوٰۃ",
            hidden: true
        },
        //معاملات
        {
            id: 18,
            label: "خریدوفروخت",
            hidden: true
        },
        {
            id: 19,
            label: "اجارہ",
            hidden: true
        },
        {
            id: 20,
            label: "اعارہ",
            hidden: true
        },
        {
            id: 21,
            label: "ھبہ",
            hidden: true
        },
        //معاشرت
        {
            id: 22,
            label: "پیدائش",
            hidden: true
        },
        {
            id: 23,
            label: "نکاح",
            hidden: true
        },
        {
            id: 24,
            label: "والدین کے حقوق",
            hidden: true
        },
        {
            id: 25,
            label: "ہمسایوں کے حقوق",
            hidden: true
        },
        //اخلاق
        {
            id: 26,
            label: "اخلاص",
            hidden: true
        },
        {
            id: 27,
            label: "تقویٰ",
            hidden: true
        },
        {
            id: 28,
            label: "صبر",
            hidden: true
        },
        {
            id: 29,
            label: "شکر",
            hidden: true
        },
        {
            id: 30,
            label: "تکبر",
            hidden: true
        },
    ]);

    // create an array with edges
    var edges = new vis.DataSet([{
            id: 'e1',
            from: 1,
            to: 2,
            hidden: false
        },
        {
            id: 'e2',
            from: 1,
            to: 3,
            hidden: false
        },
        {
            id: 'e3',
            from: 1,
            to: 4,
            hidden: false
        },
        {
            id: 'e4',
            from: 1,
            to: 5,
            hidden: false
        },
        {
            id: 'e5',
            from: 1,
            to: 6,
            hidden: false
        },
        //عقائد
        {
            id: 'e6',
            from: 2,
            to: 7,
            hidden: true
        },
        {
            id: 'e7',
            from: 2,
            to: 8,
            hidden: true
        },
        {
            id: 'e8',
            from: 2,
            to: 9,
            hidden: true
        },
        {
            id: 'e9',
            from: 2,
            to: 10,
            hidden: true
        },
        {
            id: 'e10',
            from: 2,
            to: 11,
            hidden: true
        },
        {
            id: 'e11',
            from: 2,
            to: 12,
            hidden: true
        },
        {
            id: 'e12',
            from: 2,
            to: 13,
            hidden: true
        },
        //عبادات
        {
            id: 'e13',
            from: 3,
            to: 14,
            hidden: true
        },
        {
            id: 'e14',
            from: 3,
            to: 15,
            hidden: true
        },
        {
            id: 'e15',
            from: 3,
            to: 16,
            hidden: true
        },
        {
            id: 'e16',
            from: 3,
            to: 17,
            hidden: true
        },
        //معاملات
        {
            id: 'e17',
            from: 4,
            to: 18,
            hidden: true
        },
        {
            id: 'e18',
            from: 4,
            to: 19,
            hidden: true
        },
        {
            id: 'e19',
            from: 4,
            to: 20,
            hidden: true
        },
        {
            id: 'e20',
            from: 4,
            to: 21,
            hidden: true
        },
        //معاشرت
        {
            id: 'e21',
            from: 5,
            to: 22,
            hidden: true
        },
        {
            id: 'e22',
            from: 5,
            to: 23,
            hidden: true
        },
        {
            id: 'e23',
            from: 5,
            to: 24,
            hidden: true
        },
        {
            id: 'e24',
            from: 5,
            to: 25,
            hidden: true
        },
        //اخلاق
        {
            id: 'e25',
            from: 6,
            to: 26,
            hidden: true
        },
        {
            id: 'e26',
            from: 6,
            to: 27,
            hidden: true
        },
        {
            id: 'e27',
            from: 6,
            to: 28,
            hidden: true
        },
        {
            id: 'e28',
            from: 6,
            to: 29,
            hidden: true
        },
        {
            id: 'e29',
            from: 6,
            to: 30,
            hidden: true
        },
    ]);

    // create a network
    var container = document.getElementById('mynetwork');
    var data = {
        nodes: nodes,
        edges: edges
    };
    var network = new vis.Network(container, data, {});

    // true=hide; false=show
    var toggle = false;
    network.on("click", function(e) {
        //عقائد
        tw_id = 2;
        if (e.nodes[0] == tw_id) {
            nodes.update([{
                    id: 7,
                    hidden: toggle
                },
                {
                    id: 8,
                    hidden: toggle
                },
                {
                    id: 9,
                    hidden: toggle
                },
                {
                    id: 10,
                    hidden: toggle
                },
                {
                    id: 11,
                    hidden: toggle
                },
                {
                    id: 12,
                    hidden: toggle
                },
                {
                    id: 13,
                    hidden: toggle
                }
            ]);
            edges.update([{
                    id: 'e6',
                    hidden: toggle
                },
                {
                    id: 'e7',
                    hidden: toggle
                },
                {
                    id: 'e8',
                    hidden: toggle
                },
                {
                    id: 'e9',
                    hidden: toggle
                },
                {
                    id: 'e10',
                    hidden: toggle
                },
                {
                    id: 'e11',
                    hidden: toggle
                },
                {
                    id: 'e12',
                    hidden: toggle
                }
            ]);
            network.fit();
            // switch toggle
            toggle = !toggle;
        }
        //عبادات
        tw_id = 3;
        if (e.nodes[0] == tw_id) {
            nodes.update([{
                    id: 14,
                    hidden: toggle
                },
                {
                    id: 15,
                    hidden: toggle
                },
                {
                    id: 16,
                    hidden: toggle
                },
                {
                    id: 17,
                    hidden: toggle
                },
            ]);
            edges.update([{
                    id: 'e13',
                    hidden: toggle
                },
                {
                    id: 'e14',
                    hidden: toggle
                },
                {
                    id: 'e15',
                    hidden: toggle
                },
                {
                    id: 'e16',
                    hidden: toggle
                },
            ]);
            network.fit();
            // switch toggle
            toggle = !toggle;
        }
        //معاملات
        tw_id = 4;
        if (e.nodes[0] == tw_id) {
            nodes.update([{
                    id: 18,
                    hidden: toggle
                },
                {
                    id: 19,
                    hidden: toggle
                },
                {
                    id: 20,
                    hidden: toggle
                },
                {
                    id: 21,
                    hidden: toggle
                },
            ]);
            edges.update([{
                    id: 'e17',
                    hidden: toggle
                },
                {
                    id: 'e18',
                    hidden: toggle
                },
                {
                    id: 'e19',
                    hidden: toggle
                },
                {
                    id: 'e20',
                    hidden: toggle
                },
            ]);
            network.fit();
            // switch toggle
            toggle = !toggle;
        }
        //معاشرت
        tw_id = 5;
        if (e.nodes[0] == tw_id) {
            nodes.update([{
                    id: 22,
                    hidden: toggle
                },
                {
                    id: 23,
                    hidden: toggle
                },
                {
                    id: 24,
                    hidden: toggle
                },
                {
                    id: 25,
                    hidden: toggle
                },
            ]);
            edges.update([{
                    id: 'e21',
                    hidden: toggle
                },
                {
                    id: 'e22',
                    hidden: toggle
                },
                {
                    id: 'e23',
                    hidden: toggle
                },
                {
                    id: 'e24',
                    hidden: toggle
                },
            ]);
            network.fit();
            // switch toggle
            toggle = !toggle;
        }
        //اخلاق
        tw_id = 6;
        if (e.nodes[0] == tw_id) {
            nodes.update([{
                    id: 26,
                    hidden: toggle
                },
                {
                    id: 27,
                    hidden: toggle
                },
                {
                    id: 28,
                    hidden: toggle
                },
                {
                    id: 29,
                    hidden: toggle
                },
                {
                    id: 30,
                    hidden: toggle
                },
            ]);
            edges.update([{
                    id: 'e25',
                    hidden: toggle
                },
                {
                    id: 'e26',
                    hidden: toggle
                },
                {
                    id: 'e27',
                    hidden: toggle
                },
                {
                    id: 'e28',
                    hidden: toggle
                },
                {
                    id: 'e29',
                    hidden: toggle
                },
            ]);
            network.fit();
            // switch toggle
            toggle = !toggle;
        }


    });
    var options = {
            nodes: {
              font:{
                size:16,
                color:'black',
                face:'Jameel Noori Nastaleeq'
              }
            }
            };
    network.setOptions(options);
    </script>
</body>

</html>