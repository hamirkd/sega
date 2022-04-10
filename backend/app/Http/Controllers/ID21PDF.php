<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID22</title>
</head>
<body>
    

<?php
function subArray($start,$nbr,$array){
    $array2 = [];
    if(!isset($array[$start])){
        return $array2;
    }
    $taille = count($array)<($start+$nbr)?count($array):($start+$nbr);
    for($i=$start;$i<$taille;$i++){
        $array2[] = $array[$i];
    }

    return $array2;
}
$nbpage = intval(count($traitementsDasSalarie)/49)+1;
?>


    <style>
        <!--table {
            mso-displayed-decimal-separator: "\,";
            mso-displayed-thousand-separator: " ";
        }
        
        @page {
            margin: .75in .7in .75in .7in;
            mso-header-margin: .3in;
            mso-footer-margin: .3in;
            mso-page-orientation: landscape;
        }
        
        -->
        tr
        {mso-height-source:auto;}
        col
        {mso-width-source:auto;}
        br
        {mso-data-placement:same-cell;}
        .style0
        {mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        white-space:nowrap;
        mso-rotate:0;
        mso-background-source:auto;
        mso-pattern:auto;
        color:black;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        border:none;
        mso-protection:locked visible;
        mso-style-name:Normal;
        mso-style-id:0;}
        .style62
        {mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        white-space:nowrap;
        mso-rotate:0;
        mso-background-source:auto;
        mso-pattern:auto;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        border:none;
        mso-protection:locked visible;
        mso-style-name:"Normal 4";}
        td
        {mso-style-parent:style0;
        padding-top:1px;
        padding-right:1px;
        padding-left:1px;
        mso-ignore:padding;
        color:black;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        border:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked visible;
        white-space:nowrap;
        mso-rotate:0;}
        .xl66
        {mso-style-parent:style0;
        font-size:12.0pt;
        font-weight:700;}
        .xl67
        {mso-style-parent:style0;
        font-weight:700;}
        .xl68
        {mso-style-parent:style0;
        background:white;
        mso-pattern:black none;}
        .xl69
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;}
        .xl70
        {mso-style-parent:style62;
        color:white;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        mso-protection:locked hidden;}
        .xl71
        {mso-style-parent:style62;
        color:windowtext;
        font-size:14.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl72
        {mso-style-parent:style62;
        color:windowtext;
        font-size:14.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl73
        {mso-style-parent:style62;
        color:windowtext;
        font-size:20.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl74
        {mso-style-parent:style62;
        color:windowtext;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl75
        {mso-style-parent:style62;
        color:windowtext;
        font-size:16.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl76
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl77
        {mso-style-parent:style62;
        color:windowtext;
        font-size:14.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl78
        {mso-style-parent:style62;
        color:#0066CC;
        font-size:14.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl79
        {mso-style-parent:style0;
        color:#33CCCC;
        text-align:center;
        background:white;
        mso-pattern:black none;}
        .xl80
        {mso-style-parent:style0;
        text-align:center;
        background:white;
        mso-pattern:black none;}
        .xl81
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl82
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl83
        {mso-style-parent:style62;
        color:windowtext;
        font-size:16.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl84
        {mso-style-parent:style62;
        color:windowtext;
        font-size:16.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl85
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl86
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl87
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl88
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl89
        {mso-style-parent:style62;
        color:windowtext;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl90
        {mso-style-parent:style62;
        color:windowtext;
        font-size:15.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl91
        {mso-style-parent:style62;
        color:#0066CC;
        font-size:16.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl92
        {mso-style-parent:style62;
        color:windowtext;
        font-size:12.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl93
        {mso-style-parent:style62;
        color:windowtext;
        font-size:12.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl94
        {mso-style-parent:style0;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        background:white;
        mso-pattern:black none;}
        .xl95
        {mso-style-parent:style62;
        color:#0066CC;
        font-size:15.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl96
        {mso-style-parent:style62;
        color:#0066CC;
        font-size:15.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl97
        {mso-style-parent:style62;
        color:#0066CC;
        font-size:15.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl98
        {mso-style-parent:style62;
        color:#0066CC;
        font-size:15.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl99
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:right;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl100
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl101
        {mso-style-parent:style0;
        font-size:7.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        background:white;
        mso-pattern:black none;}
        .xl102
        {mso-style-parent:style62;
        color:windowtext;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:right;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl103
        {mso-style-parent:style62;
        color:windowtext;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl104
        {mso-style-parent:style0;
        font-size:14.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        background:white;
        mso-pattern:black none;}
        .xl105
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl106
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl107
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl108
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl109
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl110
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl111
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl112
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl113
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl114
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl115
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl116
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl117
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl118
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl119
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl120
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl121
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl122
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl123
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl124
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl125
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl126
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl127
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl128
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl129
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl130
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl131
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl132
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl133
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl134
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl135
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl136
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl137
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl138
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl139
        {mso-style-parent:style62;
        color:windowtext;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl140
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl141
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl142
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl143
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl144
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl145
        {mso-style-parent:style0;
        font-size:9.0pt;}
        .xl146
        {mso-style-parent:style0;
        font-size:9.0pt;
        background:white;
        mso-pattern:black none;}
        .xl147
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl148
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl149
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl150
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl151
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl152
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl153
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl154
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:top;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        layout-flow:vertical;}
        .xl155
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl156
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:top;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;
        layout-flow:vertical;}
        .xl157
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl158
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl159
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl160
        {mso-style-parent:style62;
        color:#33CCCC;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl161
        {mso-style-parent:style62;
        color:#33CCCC;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl162
        {mso-style-parent:style62;
        color:#33CCCC;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        border:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl163
        {mso-style-parent:style0;
        color:#33CCCC;
        mso-number-format:"\#\,\#\#0";
        border:.5pt solid black;}
        .xl164
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl165
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl166
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        mso-protection:unlocked visible;}
        .xl167
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl168
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl169
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl170
        {mso-style-parent:style0;
        color:windowtext;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        border:.5pt solid black;}
        .xl171
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        border:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl172
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        background:white;
        mso-pattern:black none;}
        .xl173
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;}
        .xl174
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl175
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl176
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        text-align:center;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;}
        .xl177
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;}
        .xl178
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        background:white;
        mso-pattern:black none;}
        .xl179
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        background:white;
        mso-pattern:black none;}
        .xl180
        {mso-style-parent:style0;
        font-weight:700;
        background:white;
        mso-pattern:black none;}
        .xl181
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:top;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        white-space:normal;}
        .xl182
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl183
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl184
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl185
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl186
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl187
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl188
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;
        mso-protection:locked hidden;}
        .xl189
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:.5pt solid black;
        background:white;
        mso-pattern:black none;}
        .xl190
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl191
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl192
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl193
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:white;
        mso-pattern:black none;
        mso-protection:unlocked visible;}
        .xl194
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;}
        .xl195
        {mso-style-parent:style62;
        color:windowtext;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;}
        .xl196
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;}
        .xl197
        {mso-style-parent:style0;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        vertical-align:middle;
        white-space:normal;}
        .xl198
        {mso-style-parent:style62;
        color:windowtext;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\#\,\#\#0";
        vertical-align:middle;}

    </style>
    <table border=0 cellpadding=0 cellspacing=0 width=2230 style='border-collapse:
 collapse;table-layout:fixed;width:1667pt'>
        <col width=62 style='mso-width-source:userset;mso-width-alt:2218;width:47pt'>
        <col width=35 style='mso-width-source:userset;mso-width-alt:1251;width:26pt'>
        <col width=69 style='mso-width-source:userset;mso-width-alt:2446;width:52pt'>
        <col width=350 style='mso-width-source:userset;mso-width-alt:12458;width:263pt'>
        <col width=34 span=2 style='mso-width-source:userset;mso-width-alt:1194;
 width:25pt'>
        <col width=36 style='mso-width-source:userset;mso-width-alt:1280;width:27pt'>
        <col width=34 span=8 style='mso-width-source:userset;mso-width-alt:1194;
 width:25pt'>
        <col width=91 span=12 style='mso-width-source:userset;mso-width-alt:3242;
 width:68pt'>
        <col width=82 span=3 style='width:62pt'>
        <tr height=19 style='height:14.55pt'>
            <td height=19 width=62 style='height:14.55pt;width:47pt'></td>
            <td width=35 style='width:26pt'></td>
            <td width=69 style='width:52pt'></td>
            <td width=350 style='width:263pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=36 style='width:27pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=34 style='width:25pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=82 style='width:62pt'></td>
            <td width=82 style='width:62pt'></td>
            <td width=82 style='width:62pt'></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.45pt'>
            <td height=20 style='height:15.45pt'></td>
            <td></td>
            <td class=xl66 colspan=3 style='mso-ignore:colspan'>ID21: BORDEREAU DÉTAILLÉ DES SALAIRES VERSÉS PAR EMPLOYÉS<span style='mso-spacerun:yes'> </span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td></td>
            <td class=xl67></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td></td>
            <td>Page 1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl70></td>
        </tr>
        <tr height=32 style='mso-height-source:userset;height:24.45pt'>
            <td height=32 class=xl68 style='height:24.45pt'>&nbsp;</td>
            <td colspan=3 class=xl71>REPUBLIQUE GABONAISE</td>
            <td class=xl72>&nbsp;</td>
            <td class=xl72>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td colspan=15 class=xl73><span style='mso-spacerun:yes'>  </span>DECLARATION DES TRAITEMENTS, SALAIRES, PENSIONS VERSEES, ETC …<span style='mso-spacerun:yes'> </span></td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td colspan=2 class=xl74>(art. 90 du CGI)</td>
            <td class=xl75>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl70></td>
            <td></td>
        </tr>
        <tr height=23 style='mso-height-source:userset;height:17.55pt'>
            <td height=23 class=xl68 style='height:17.55pt'>&nbsp;</td>
            <td colspan=3 class=xl71>MINISTERE DE L'ECONOMIE, DU COMMERCE</td>
            <td class=xl72>&nbsp;</td>
            <td class=xl72>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl77 colspan=2 style='mso-ignore:colspan'>Exercice ……</td>
            <td class=xl79><?=$annee?></td>
            <td class=xl80>. . . . . . . . . .</td>
            <td class=xl77 colspan=4 style='mso-ignore:colspan'>(au titre duquel les retenues ont été effectuée<span style='display:none'>s)</span></td>
            <td class=xl68>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl81>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=28 style='mso-height-source:userset;height:21.0pt'>
            <td height=28 class=xl68 style='height:21.0pt'>&nbsp;</td>
            <td colspan=3 class=xl71>DE L'INDUSTRIE ET DU TOURISME</td>
            <td class=xl72>&nbsp;</td>
            <td class=xl72>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl82>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl82>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl83 colspan=9 style='mso-ignore:colspan'>BORDEREAU DETAILLE DES SALAIRES VERSES AUX EMPLOYES</td>
            <td class=xl84>&nbsp;</td>
            <td class=xl84>&nbsp;</td>
            <td class=xl85>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td colspan=3 class=xl82>----------------------------------</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl81>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td colspan=3 class=xl86>DIRECTION GENERALE DES IMPOTS</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl88>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=28 style='mso-height-source:userset;height:21.0pt'>
            <td height=28 class=xl68 style='height:21.0pt'>&nbsp;</td>
            <td colspan=3 class=xl89>BP 37 / 45 - Libreville</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td colspan=16 class=xl90>NOM DE L'ENTREPRISE OU RAISON SOCIALE : ORANGE BURKINA FASO</td>
            <td class=xl91>&nbsp;</td>
            <td colspan=2 class=xl92>(art. 90 du CGI)</td>
            <td class=xl93>&nbsp;</td>
            <td class=xl93>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=26 style='mso-height-source:userset;height:19.2pt'>
            <td height=26 class=xl68 style='height:19.2pt'>&nbsp;</td>
            <td colspan=3 class=xl94>Tel : 79.53.76/77</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl90 colspan=2 style='mso-ignore:colspan'>NIF<span style='mso-spacerun:yes'>  </span>:</td>
            <td colspan=7 class=xl95 style='border-right:.5pt solid black'>5 6 3 6 8 3 M</td>
            <td class=xl98>&nbsp;</td>
            <td class=xl98>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl99>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl100>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68><span style='mso-spacerun:yes'> </span></td>
            <td class=xl99>&nbsp;</td>
            <td class=xl82>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl99>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl100>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl101>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl99>&nbsp;</td>
            <td class=xl82>&nbsp;</td>
            <td class=xl99>&nbsp;</td>
            <td class=xl82>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl99>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=28 style='mso-height-source:userset;height:21.0pt'>
            <td height=28 class=xl68 style='height:21.0pt'>&nbsp;</td>
            <td class=xl100>&nbsp;</td>
            <td class=xl102>Feuillet n°</td>
            <td class=xl103>1/9</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td colspan=13 class=xl104>La présente déclaration est à déposer avant le 30 avril simultanément aux déclarations n° ID01 ou ID14<span style='mso-spacerun:yes'> </span></td>
            <td class=xl83>&nbsp;</td>
            <td class=xl103>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=38 style='mso-height-source:userset;height:28.5pt'>
            <td height=38 class=xl68 style='height:28.5pt'>&nbsp;</td>
            <td rowspan=4 class=xl105 width=35 style='width:26pt'>E<br> F
                <br> F
                <br> E
                <br> C
                <br> T
                <br> I
                <br> F
                <br> S
            </td>
            <td rowspan=4 class=xl107>NIF</td>
            <td rowspan=4 class=xl110 width=350 style='width:263pt'>Nom(s) et prénon(s)</td>
            <td colspan=2 rowspan=2 class=xl108 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>CODE</td>
            <td colspan=5 rowspan=2 class=xl108 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>AU<span style='mso-spacerun:yes'> 
  </span>01/01/20…</td>
            <td colspan=4 rowspan=2 class=xl111 width=136 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:100pt'>Période mois</td>
            <td colspan=4 class=xl123 style='border-right:.5pt solid black;border-left:
  none'>PRESENCE AU GABON</td>
            <td rowspan=4 class=xl110 width=91 style='width:68pt'>Salaire brut de congés</td>
            <td rowspan=4 class=xl110 width=91 style='width:68pt'>Total<span style='mso-spacerun:yes'>              </span>(1 à 5)</td>
            <td class=xl126 colspan=3 style='mso-ignore:colspan'>IMPOTS RETENUS A LA SOURCE EN 20…</td>
            <td class=xl127>&nbsp;</td>
            <td class=xl128>&nbsp;</td>
            <td rowspan=4 class=xl129 width=91 style='width:68pt'>Indemnités non imposables
            </td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=22 style='mso-height-source:userset;height:17.25pt'>
            <td height=22 class=xl68 style='height:17.25pt'>&nbsp;</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>Salaires<span style='mso-spacerun:yes'>   </span>brut de présence</td>
            <td colspan=2 class=xl123 style='border-right:.5pt solid black;border-left:
  none'>AVANTAGES EN NATURE</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>Indemnités imposables
            </td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>TCTS</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>IRPP</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>FNH</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>CFP</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>TOTAL (7+8+10)
            </td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td height=21 class=xl68 style='height:15.75pt'>&nbsp;</td>
            <td rowspan=2 class=xl131 style='border-top:none'>E<br>M<br>P<br>L<br>O<br>I</td>
            <td rowspan=2 class=xl135 width=34 style='border-top:none;width:25pt'>N<br>I<br>V<br>E<br>A<br>U</td>
            <td rowspan=2 class=xl131 style='border-top:none'>N<br>A<br>T<br>I<br>O<br>N<br>A<br>L</td>
            <td rowspan=2 class=xl135 width=34 style='border-top:none;width:25pt'>A<br>G<br>E</td>
            <td rowspan=2 class=xl131 style='border-top:none'>S<br>E<br>X<br>E</td>
            <td rowspan=2 class=xl131 style='border-top:none'>S<br>I<br>T<br> <br>F<br>A<br>M<br>I</td>
            <td class=xl139 style='border-left:none'>N<br>b<br>r<br>e<br><br></td>
            <td colspan=2 rowspan=2 class=xl132 style='border-right:.5pt solid black'>DEBUT</td>
            <td colspan=2 rowspan=2 class=xl136 width=68 style='border-right:.5pt solid black;
  width:50pt'>FIN</td>
            <td rowspan=2 class=xl110 width=91 style='border-top:none;width:68pt'>Logt, Eau, Electricité</td>
            <td rowspan=2 class=xl110 width=91 style='border-top:none;width:68pt'>Nourriture</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=117 style='mso-height-source:userset;height:87.75pt'>
            <td height=117 class=xl68 style='height:87.75pt'>&nbsp;</td>
            <td class=xl144 align=center style='border-left:none'>E<br>N<br>F<br>A<br>N<br>T<br>S</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr class=xl145 height=22 style='mso-height-source:userset;height:16.5pt'>
            <td height=22 class=xl146 style='height:16.5pt'>&nbsp;</td>
            <td class=xl147 width=35 style='width:26pt'>&nbsp;</td>
            <td class=xl148 style='border-left:none'>&nbsp;</td>
            <td class=xl149 width=350 style='border-left:none;width:263pt'>&nbsp;</td>
            <td class=xl150>&nbsp;</td>
            <td class=xl151 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl152 width=36 style='width:27pt'>(1)</td>
            <td class=xl151 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl153 width=34 style='border-left:none;width:25pt'>(2)</td>
            <td class=xl153 width=34 style='border-left:none;width:25pt'>(3)</td>
            <td class=xl151 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl154 style='border-left:none'>&nbsp;</td>
            <td class=xl155 width=34 style='width:25pt'>&nbsp;</td>
            <td class=xl156 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl155 width=34 style='width:25pt'>&nbsp;</td>
            <td class=xl152 width=91 style='width:68pt'>(1)</td>
            <td class=xl157 width=91 style='border-left:none;width:68pt'>(2)</td>
            <td class=xl153 width=91 style='width:68pt'>(3)</td>
            <td class=xl152 width=91 style='width:68pt'>(4)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(5)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(6)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(7)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(8)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(9)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(10)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(11)</td>
            <td class=xl120 width=91 style='width:68pt'>(12)</td>
            <td class=xl146>&nbsp;</td>
            <td class=xl146>&nbsp;</td>
            <td class=xl145></td>
        </tr>
        <?php
        $data = subArray(0,36,$traitementsDasSalarie);
        
        $salaire_brut=0;
        $avlog=0;
        $av_nour=0;
        $prim_impo=0;
        $brut_conge=0;
        $total_brut=0;
        $tcs=0;
        $irpp=0;
        $fnh=0;
        $cfp=0;
        $total=0;
        $primes_non_impo=0;
        foreach($data as $da){
        ?>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl158 style='border-top:none'><?=$da->ordre?></td>
            <td class=xl158 style='border-top:none;border-left:none'><?=$da->nif?></td>
            <td class=xl159 style='border-top:none;border-left:none'><?=$da->nom." ".$da->prenom?>
            </td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->emploi?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->niveau?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->nationalite?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->age?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->sexe?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->situation_familiale?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->enfants?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->deb10?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->deb11?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->fin12?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->fin13das?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->salaire_brut?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->avlog?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->av_nour?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->prim_impo?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->brut_conge?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->total_brut?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->tcs?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->irpp?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->fnh?></td>
            <td class=xl163 align=right style='border-top:none;border-left:none'><?=$da->cfp?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->total?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->primes_non_impo?></td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <?php 
        
        $salaire_brut = $salaire_brut + $da->salaire_brut;
        $avlog = $avlog + $da->avlog;
        $av_nour = $av_nour + $da->av_nour;
        $prim_impo = $prim_impo + $da->prim_impo;
        $brut_conge = $brut_conge + $da->brut_conge;
        $total_brut = $total_brut + $da->total_brut;
        $tcs = $tcs + $da->tcs;
        $irpp = $irpp + $da->irpp;
        $fnh = $fnh + $da->fnh;
        $cfp = $cfp + $da->cfp;
        $total = $total + $da->total;
        $primes_non_impo = $primes_non_impo + $da->primes_non_impo;
        } 
        ?>
       
        <tr height=26 style='mso-height-source:userset;height:19.5pt'>
            <td height=26 class=xl68 style='height:19.5pt'>&nbsp;</td>
            <td class=xl164 style='border-top:none'>&nbsp;</td>
            <td class=xl165 style='border-top:none'>&nbsp;</td>
            <td class=xl166>TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl167 style='border-top:none'>&nbsp;</td>
            <td class=xl168 style='border-top:none'>&nbsp;</td>
            <td class=xl169 align=right style='border-left:none'><?=$avlog ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$salaire_brut ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$av_nour ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$prim_impo ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$brut_conge ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$total_brut ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$tcs ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$irpp ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$fnh ?></td>
            <td class=xl170 align=right style='border-top:none;border-left:none'><?=$cfp ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$total ?></td>
            <td class=xl171 align=right style='border-top:none;border-left:none'><?=$primes_non_impo ?></td>
            <td class=xl172>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl173>&nbsp;</td>
            <td class=xl174>&nbsp;</td>
            <td class=xl175 colspan=7 style='mso-ignore:colspan'>Joindre un bulletin indiviuduel ID19 par salarié percevant plus de 80 000 FCFA par mois</td>
            <td class=xl175>&nbsp;</td>
            <td class=xl175>&nbsp;</td>
            <td class=xl175>&nbsp;</td>
            <td class=xl175>&nbsp;</td>
            <td class=xl175>&nbsp;</td>
            <td class=xl176>&nbsp;</td>
            <td class=xl176>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl177>&nbsp;</td>
            <td class=xl177>&nbsp;</td>
            <td class=xl177>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69><span style='mso-spacerun:yes'> </span></td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69><span style='mso-spacerun:yes'> </span></td>
            <td class=xl69>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178 colspan=4 style='mso-ignore:colspan'>1<span style='mso-spacerun:yes'>  </span>Nationalité : Gabonais : 1 ; CEMAC : 2 ; Autres africains : 3 ; Non africains :4</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178 colspan=2 style='mso-ignore:colspan'>2<span style='mso-spacerun:yes'>  </span>Sexe : Masculin ;<span style='mso-spacerun:yes'>  </span>Feminin : 2</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl179>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178 colspan=2 style='mso-ignore:colspan'>3<span style='mso-spacerun:yes'>  </span>Situation familiale : Marié : 1 ; Célibataire : 2<span style='mso-spacerun:yes'>  </span>; Veuf : 3 ; Divorcé : 4
            </td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl178>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl180>N°1</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <?php
        $nbpage = intval(count($traitementsDasSalarie)/49);
        $nbpage = $nbpage + ((count($traitementsDasSalarie)%49)==0?0:1);
        for($i=2;$i<=$nbpage;$i++){
            $start =  36 + 49*($i-2);
            $data = [];
            $data = subArray($start,49,$traitementsDasSalarie); 
        
        ?>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=28 style='mso-height-source:userset;height:21.0pt'>
            <td height=28 class=xl68 style='height:21.0pt'>&nbsp;</td>
            <td class=xl100>&nbsp;</td>
            <td class=xl102>Feuillet n°</td>
            <td class=xl103><?=($i)?>/<?=$nbpage?></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td colspan=13 class=xl104>La présente déclaration est à déposer avant le 30 avril simultanément aux déclarations n° ID01 ou ID14<span style='mso-spacerun:yes'> </span></td>
            <td class=xl83>&nbsp;</td>
            <td class=xl103>&nbsp;</td>
            <td class=xl76>&nbsp;</td>
            <td class=xl87>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=38 style='mso-height-source:userset;height:28.5pt'>
            <td height=38 class=xl68 style='height:28.5pt'>&nbsp;</td>
            <td rowspan=4 class=xl105 width=35 style='width:26pt'>E<br> F
                <br> F
                <br> E
                <br> C
                <br> T
                <br> I
                <br> F
                <br> S
            </td>
            <td rowspan=4 class=xl107>NIF</td>
            <td rowspan=4 class=xl110 width=350 style='width:263pt'>Nom(s) et prénon(s)</td>
            <td colspan=2 rowspan=2 class=xl108 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>CODE</td>
            <td colspan=5 rowspan=2 class=xl108 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>AU<span style='mso-spacerun:yes'> 
  </span>01/01/20…</td>
            <td colspan=4 rowspan=2 class=xl111 width=136 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:100pt'>Période mois</td>
            <td colspan=4 class=xl123 style='border-right:.5pt solid black;border-left:
  none'>PRESENCE AU GABON</td>
            <td rowspan=4 class=xl110 width=91 style='width:68pt'>Salaire brut de congés</td>
            <td rowspan=4 class=xl110 width=91 style='width:68pt'>Total<span style='mso-spacerun:yes'>              </span>(1 à 5)</td>
            <td class=xl126 colspan=3 style='mso-ignore:colspan'>IMPOTS RETENUS A LA SOURCE EN 20…</td>
            <td class=xl127>&nbsp;</td>
            <td class=xl128>&nbsp;</td>
            <td rowspan=4 class=xl129 width=91 style='width:68pt'>Indemnités non imposables
            </td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=22 style='mso-height-source:userset;height:17.25pt'>
            <td height=22 class=xl68 style='height:17.25pt'>&nbsp;</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>Salaires<span style='mso-spacerun:yes'>   </span>brut de présence</td>
            <td colspan=2 class=xl123 style='border-right:.5pt solid black;border-left:
  none'>AVANTAGES EN NATURE</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>Indemnités imposables
            </td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>TCTS</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>IRPP</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>FNH</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>CFP</td>
            <td rowspan=3 class=xl110 width=91 style='border-top:none;width:68pt'>TOTAL (7+8+10)
            </td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td height=21 class=xl68 style='height:15.75pt'>&nbsp;</td>
            <td rowspan=2 class=xl131 style='border-top:none'>E<br>M<br>P<br>L<br>O<br>I</td>
            <td rowspan=2 class=xl135 width=34 style='border-top:none;width:25pt'>N<br>I<br>V<br>E<br>A<br>U</td>
            <td rowspan=2 class=xl131 style='border-top:none'>N<br>A<br>T<br>I<br>O<br>N<br>A<br>L</td>
            <td rowspan=2 class=xl135 width=34 style='border-top:none;width:25pt'>A<br>G<br>E</td>
            <td rowspan=2 class=xl131 style='border-top:none'>S<br>E<br>X<br>E</td>
            <td rowspan=2 class=xl131 style='border-top:none'>S<br>I<br>T<br> <br>F<br>A<br>M<br>I</td>
            <td class=xl139 style='border-left:none'>N<br>b<br>r<br>e<br> </td>
            <td colspan=2 rowspan=2 class=xl132 style='border-right:.5pt solid black'>DEBUT</td>
            <td colspan=2 rowspan=2 class=xl136 width=68 style='border-right:.5pt solid black;
  width:50pt'>FIN</td>
            <td rowspan=2 class=xl110 width=91 style='border-top:none;width:68pt'>Logt, Eau, Electricité</td>
            <td rowspan=2 class=xl110 width=91 style='border-top:none;width:68pt'>Nourriture</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=117 style='mso-height-source:userset;height:87.75pt'>
            <td height=117 class=xl68 style='height:87.75pt'>&nbsp;</td>
            <td class=xl144 align=center style='border-left:none'>E<br>N<br>F<br>A<br>N<br>T<br>S</td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr class=xl145 height=22 style='mso-height-source:userset;height:16.5pt'>
            <td height=22 class=xl146 style='height:16.5pt'>&nbsp;</td>
            <td class=xl147 width=35 style='width:26pt'>&nbsp;</td>
            <td class=xl148 style='border-left:none'>&nbsp;</td>
            <td class=xl149 width=350 style='border-left:none;width:263pt'>&nbsp;</td>
            <td class=xl150>&nbsp;</td>
            <td class=xl151 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl152 width=36 style='width:27pt'>(1)</td>
            <td class=xl151 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl153 width=34 style='border-left:none;width:25pt'>(2)</td>
            <td class=xl153 width=34 style='border-left:none;width:25pt'>(3)</td>
            <td class=xl151 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl154 style='border-left:none'>&nbsp;</td>
            <td class=xl155 width=34 style='width:25pt'>&nbsp;</td>
            <td class=xl156 width=34 style='border-left:none;width:25pt'>&nbsp;</td>
            <td class=xl155 width=34 style='width:25pt'>&nbsp;</td>
            <td class=xl152 width=91 style='width:68pt'>(1)</td>
            <td class=xl157 width=91 style='border-left:none;width:68pt'>(2)</td>
            <td class=xl153 width=91 style='width:68pt'>(3)</td>
            <td class=xl152 width=91 style='width:68pt'>(4)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(5)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(6)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(7)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(8)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(9)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(10)</td>
            <td class=xl153 width=91 style='border-left:none;width:68pt'>(11)</td>
            <td class=xl181 width=91 style='width:68pt'>(12)</td>
            <td class=xl146>&nbsp;</td>
            <td class=xl146>&nbsp;</td>
            <td class=xl145></td>
        </tr>
        <?php
   foreach($data as $da){ ?>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl158 style='border-top:none'><?=$da->ordre?></td>
            <td class=xl158 style='border-top:none;border-left:none'><?=$da->nif?></td>
            <td class=xl159 style='border-top:none;border-left:none'><?=$da->nom." ".$da->prenom?>
            </td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->emploi?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->niveau?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->nationalite?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->age?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->sexe?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->situation_familiale?></td>
            <td class=xl160 style='border-top:none;border-left:none'><?=$da->enfants?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->deb10?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->deb11?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->fin12?></td>
            <td class=xl161 align=right style='border-top:none;border-left:none'><?=$da->fin13das?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->salaire_brut?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->avlog?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->av_nour?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->prim_impo?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->brut_conge?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->total_brut?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->tcs?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->irpp?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->fnh?></td>
            <td class=xl163 align=right style='border-top:none;border-left:none'><?=$da->cfp?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->total?></td>
            <td class=xl162 align=right style='border-top:none;border-left:none'><?=$da->primes_non_impo?></td>
            <td class=xl68>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        
        <?php }
        
        $salaire_brut = $salaire_brut + $da->salaire_brut;
        $avlog = $avlog + $da->avlog;
        $av_nour = $av_nour + $da->av_nour;
        $prim_impo = $prim_impo + $da->prim_impo;
        $brut_conge = $brut_conge + $da->brut_conge;
        $total_brut = $total_brut + $da->total_brut;
        $tcs = $tcs + $da->tcs;
        $irpp = $irpp + $da->irpp;
        $fnh = $fnh + $da->fnh;
        $cfp = $cfp + $da->cfp;
        $total = $total + $da->total;
        $primes_non_impo = $primes_non_impo + $da->primes_non_impo;

        ?>
        <tr height=26 style='mso-height-source:userset;height:19.5pt'>
            <td height=26 class=xl68 style='height:19.5pt'>&nbsp;</td>
            <td class=xl189>&nbsp;</td>
            <td class=xl190>&nbsp;</td>
            <td class=xl191>TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl191>&nbsp;</td>
            <td class=xl192>&nbsp;</td>
            <td class=xl169 align=right style='border-left:none'><?=$avlog ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$salaire_brut ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$av_nour ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$prim_impo ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$brut_conge ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$total_brut ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$tcs ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$irpp ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$fnh ?></td>
            <td class=xl170 align=right style='border-top:none;border-left:none'><?=$cfp ?></td>
            <td class=xl169 align=right style='border-left:none'><?=$total ?></td>
            <td class=xl171 align=right style='border-top:none;border-left:none'><?=$primes_non_impo ?></td>
            <td class=xl172>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl173>&nbsp;</td>
            <td class=xl174>&nbsp;</td>
            <td class=xl193 colspan=7 style='mso-ignore:colspan'>Joindre un bulletin indiviuduel ID19 par salarié percevant plus de 80 000 FCFA par mois</td>
            <td class=xl193 style='border-top:none'>&nbsp;</td>
            <td class=xl193 style='border-top:none'>&nbsp;</td>
            <td class=xl193 style='border-top:none'>&nbsp;</td>
            <td class=xl193 style='border-top:none'>&nbsp;</td>
            <td class=xl193 style='border-top:none'>&nbsp;</td>
            <td class=xl176>&nbsp;</td>
            <td class=xl176>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl172>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 class=xl68 style='height:14.55pt'>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl69>&nbsp;</td>
            <td class=xl68>&nbsp;</td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td class=xl194></td>
            <td class=xl195>&nbsp;</td>
            <td class=xl195>&nbsp;</td>
            <td class=xl195>&nbsp;</td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194><span style='mso-spacerun:yes'> </span></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl196></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194></td>
            <td class=xl194><span style='mso-spacerun:yes'> </span></td>
            <td class=xl194></td>
            <td class=xl196></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td class=xl196></td>
            <td class=xl196 colspan=4 style='mso-ignore:colspan'>1<span style='mso-spacerun:yes'>  </span>Nationalité : Gabonais : 1 ; CEMAC : 2 ; Autres africains : 3 ; Non africains :4</td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl197 width=91 style='width:68pt'></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl198></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td class=xl196></td>
            <td class=xl196 colspan=2 style='mso-ignore:colspan'>2<span style='mso-spacerun:yes'>  </span>Sexe : Masculin ;<span style='mso-spacerun:yes'>  </span>Feminin : 2</td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl198></td>
            <td class=xl198><span style='mso-spacerun:yes'> </span></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl198></td>
            <td class=xl196></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td class=xl196></td>
            <td class=xl196 colspan=2 style='mso-ignore:colspan'>3<span style='mso-spacerun:yes'>  </span>Situation familiale : Marié : 1 ; Célibataire : 2<span style='mso-spacerun:yes'>  </span>; Veuf : 3 ; Divorcé : 4
            </td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td class=xl196></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class=xl67>N°<?=($i)?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
        <tr height=19 style='mso-height-source:userset;height:14.55pt'>
            <td height=19 style='height:14.55pt'></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php } //END IF 
   ?>
    </table>

</body> 
</html>