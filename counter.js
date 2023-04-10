//import { Component } from 'react';
import React,{Component} from 'react';//component is class in this context
//import ReactDOM from'react-dom';
import './counter.css';
class Counter extends Component{//counter(class based component) is child class of component class
   state={
       count:0
      
   };
   


    add=()=>
   {
       this.setState({count:this.state.count + 1});
       
//    this.state.count=this.state.count + 1;
//     return this.setState({count});
   //count==0?{}
       
}
   sub=()=>
   {
    //count=this.
    this.setState({count:this.state.count - 1});
       
   }
   myStyle1={
    color:"Red"
}
myStyle2=
{
 color:"grey"
}
myStyle3=
{
color:"green"
}
   
      render()
   {
       return(
       <div className="a">
           <h1 style={this.state.count < 0 ? this.myStyle1:this.state.count > 0 ? this.myStyle3:this.myStyle2}>{this.state.count}</h1>
          {/* <h1 style={this.myStyle1}>{this.state.count}</h1> */}
           
           {/* <h1 className={this.state.count < 0 ? "myStyle1":this.state.count > 0 ? "myStyle3":"myStyle2" }>{this.state.count}</h1> */}
          <button className='b' onClick={this.sub}>-</button>
           <button onClick={this.add}>+</button>
       </div>);
       
   }
}
export default Counter;