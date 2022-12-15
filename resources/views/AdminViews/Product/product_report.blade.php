@extends('AdminViews.Layout.layout')
@section('title','Product Report')
@section('style')
<style>

</style>

@endsection

@section('content')
  
    
  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
      
        
      <div class="card-body">
              <h5 class="card-title">Product Report</h5>

              <div id="lineChart" style="min-height: 365px;"><div id="apexchartslugbk1y4j" class="apexcharts-canvas apexchartslugbk1y4j apexcharts-theme-light" style="width: 683px; height: 350px;"><svg id="SvgjsSvg2090" width="683" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2092" class="apexcharts-inner apexcharts-graphical" transform="translate(45.35416793823242, 30)"><defs id="SvgjsDefs2091"><clipPath id="gridRectMasklugbk1y4j"><rect id="SvgjsRect2098" width="624.9687480926514" height="288.42666563796996" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklugbk1y4j"></clipPath><clipPath id="nonForecastMasklugbk1y4j"></clipPath><clipPath id="gridRectMarkerMasklugbk1y4j"><rect id="SvgjsRect2099" width="619.9687480926514" height="287.42666563796996" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2097" x1="0" y1="0" x2="0" y2="283.42666563796996" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="283.42666563796996" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2105" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2106" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2108" font-family="Helvetica, Arial, sans-serif" x="0" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2109">Jan</tspan><title>Jan</title></text><text id="SvgjsText2111" font-family="Helvetica, Arial, sans-serif" x="76.99609351158142" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2112">Feb</tspan><title>Feb</title></text><text id="SvgjsText2114" font-family="Helvetica, Arial, sans-serif" x="153.99218702316284" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2115">Mar</tspan><title>Mar</title></text><text id="SvgjsText2117" font-family="Helvetica, Arial, sans-serif" x="230.98828053474426" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2118">Apr</tspan><title>Apr</title></text><text id="SvgjsText2120" font-family="Helvetica, Arial, sans-serif" x="307.9843740463257" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2121">May</tspan><title>May</title></text><text id="SvgjsText2123" font-family="Helvetica, Arial, sans-serif" x="384.9804675579071" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2124">Jun</tspan><title>Jun</title></text><text id="SvgjsText2126" font-family="Helvetica, Arial, sans-serif" x="461.9765610694885" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2127">Jul</tspan><title>Jul</title></text><text id="SvgjsText2129" font-family="Helvetica, Arial, sans-serif" x="538.97265458107" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2130">Aug</tspan><title>Aug</title></text><text id="SvgjsText2132" font-family="Helvetica, Arial, sans-serif" x="615.9687480926514" y="312.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2133">Sep</tspan><title>Sep</title></text></g><line id="SvgjsLine2134" x1="0" y1="284.42666563796996" x2="615.9687480926514" y2="284.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG2155" class="apexcharts-grid"><g id="SvgjsG2156" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2167" x1="0" y1="0" x2="615.9687480926514" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2168" x1="0" y1="56.68533312759399" x2="615.9687480926514" y2="56.68533312759399" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2169" x1="0" y1="113.37066625518798" x2="615.9687480926514" y2="113.37066625518798" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2170" x1="0" y1="170.05599938278198" x2="615.9687480926514" y2="170.05599938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2171" x1="0" y1="226.74133251037597" x2="615.9687480926514" y2="226.74133251037597" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2172" x1="0" y1="283.42666563796996" x2="615.9687480926514" y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2157" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2158" x1="0" y1="284.42666563796996" x2="0" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2159" x1="76.99609351158142" y1="284.42666563796996" x2="76.99609351158142" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2160" x1="153.99218702316284" y1="284.42666563796996" x2="153.99218702316284" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2161" x1="230.98828053474426" y1="284.42666563796996" x2="230.98828053474426" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2162" x1="307.9843740463257" y1="284.42666563796996" x2="307.9843740463257" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2163" x1="384.9804675579071" y1="284.42666563796996" x2="384.9804675579071" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2164" x1="461.9765610694885" y1="284.42666563796996" x2="461.9765610694885" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2165" x1="538.97265458107" y1="284.42666563796996" x2="538.97265458107" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2166" x1="615.9687480926514" y1="284.42666563796996" x2="615.9687480926514" y2="290.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><rect id="SvgjsRect2173" width="615.9687480926514" height="56.68533312759399" x="0" y="0" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMasklugbk1y4j)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2174" width="615.9687480926514" height="56.68533312759399" x="0" y="56.68533312759399" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMasklugbk1y4j)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2175" width="615.9687480926514" height="56.68533312759399" x="0" y="113.37066625518798" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMasklugbk1y4j)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2176" width="615.9687480926514" height="56.68533312759399" x="0" y="170.05599938278198" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMasklugbk1y4j)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2177" width="615.9687480926514" height="56.68533312759399" x="0" y="226.74133251037597" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMasklugbk1y4j)" class="apexcharts-grid-row"></rect><line id="SvgjsLine2179" x1="0" y1="283.42666563796996" x2="615.9687480926514" y2="283.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2178" x1="0" y1="1" x2="0" y2="283.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2100" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2101" class="apexcharts-series" seriesName="Desktops" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2104" d="M 0 264.53155459543865L 76.99609351158142 205.95671036359153L 153.99218702316284 217.2937769891103L 230.98828053474426 187.06159932106019L 307.9843740463257 190.84062152956645L 384.9804675579071 166.27697717427571L 461.9765610694885 153.0503994445038L 538.97265458107 111.48115515093485L 615.9687480926514 3.7790222085062624" fill="none" fill-opacity="1" stroke="rgba(0,143,251,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasklugbk1y4j)" pathTo="M 0 264.53155459543865L 76.99609351158142 205.95671036359153L 153.99218702316284 217.2937769891103L 230.98828053474426 187.06159932106019L 307.9843740463257 190.84062152956645L 384.9804675579071 166.27697717427571L 461.9765610694885 153.0503994445038L 538.97265458107 111.48115515093485L 615.9687480926514 3.7790222085062624" pathFrom="M -1 283.42666563796996L -1 283.42666563796996L 76.99609351158142 283.42666563796996L 153.99218702316284 283.42666563796996L 230.98828053474426 283.42666563796996L 307.9843740463257 283.42666563796996L 384.9804675579071 283.42666563796996L 461.9765610694885 283.42666563796996L 538.97265458107 283.42666563796996L 615.9687480926514 283.42666563796996"></path><g id="SvgjsG2102" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2185" r="0" cx="0" cy="0" class="apexcharts-marker w87gy84mj no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2103" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2180" x1="0" y1="0" x2="615.9687480926514" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2181" x1="0" y1="0" x2="615.9687480926514" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2182" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2183" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2184" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2096" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2135" class="apexcharts-yaxis" rel="0" transform="translate(15.354167938232422, 0)"><g id="SvgjsG2136" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2138" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2139">150</tspan><title>150</title></text><text id="SvgjsText2141" font-family="Helvetica, Arial, sans-serif" x="20" y="88.18533312759399" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2142">120</tspan><title>120</title></text><text id="SvgjsText2144" font-family="Helvetica, Arial, sans-serif" x="20" y="144.87066625518798" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2145">90</tspan><title>90</title></text><text id="SvgjsText2147" font-family="Helvetica, Arial, sans-serif" x="20" y="201.55599938278198" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2148">60</tspan><title>60</title></text><text id="SvgjsText2150" font-family="Helvetica, Arial, sans-serif" x="20" y="258.24133251037597" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2151">30</tspan><title>30</title></text><text id="SvgjsText2153" font-family="Helvetica, Arial, sans-serif" x="20" y="314.92666563796996" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2154">0</tspan><title>0</title></text></g></g><g id="SvgjsG2093" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 175px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#lineChart"), {
                    series: [{
                      name: "Desktops",
                      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                    }],
                    chart: {
                      height: 350,
                      type: 'line',
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    grid: {
                      row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                      },
                    },
                    xaxis: {
                      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    }
                  }).render();
                });
              </script>


            </div>

      </div>
    </section>

  </main>
@endsection

@section('script')

<script>

</script>
@endsection