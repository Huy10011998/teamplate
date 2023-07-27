import React, { Component } from "react";
import { Line } from "react-chartjs-2";


const data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul","Aug","Sep"],
    datasets: [
   
      {
        label: "Product",
        data: [10, 41, 35, 51, 54, 49,69,91,148],
        fill: false,
        borderWidth: 4,
        pointBorderWidth : 0,
        borderColor: "#9a55ff"
      }
    ]
  };

export default class SingleChart extends React.Component {
    render() {
      return (
        <div className="App">
            <Line data={data}         
              options={{
                legend:{
                  display:false,
                }
              }} />
        </div>
          );
        }
      }