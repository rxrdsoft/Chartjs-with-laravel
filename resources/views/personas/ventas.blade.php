@extends('layouts.empleado')
@section('content')
<canvas id="bar-chart-grouped" width="800" height="450"></canvas>


@push('cuadro2')
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"></script>
   <script>
      $(document).ready(function(){
      var data1=[];
      var data2=[];
   $.get('/api/ventascuotas',function(response){
      $.each(response,function(index,value){
         data1.push(value.cuota);
         data2.push(value.sueldo);
        // console.log(index+'/'+value.cuota+'-'+value.sueldo);
        // console.log(typeof(i));
     })
     console.log(response);

   var chart = new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050", "2060", "2070", "2080", "2090"],
      datasets: [
        {
          label: "Africa",
          backgroundColor: "#3e95cd",
          data: data1
        }, {
          label: "Europe",
          backgroundColor: "#8e5ea2",
          data: data2
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions)'
      },
      scales:{
       xAxes: [{
         barPercentage: 0.8,
         categoryPercentage: 0.2
       }]
      }
    }
}); //FIN DE CHART JS

}); //FIN DE $.GET

 }) // FIN DE $(DOCUMENT).READY(FUNCTION())

   </script>



@endpush
@endsection
