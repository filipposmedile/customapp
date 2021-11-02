import { data } from 'jquery';
import React from 'react';
import ReactDOM from 'react-dom';

class LeftButton extends React.Component{
    constructor(props){
        super(props);
    }
    
    render(){
        const aLink = <a href={this.props.link}>{this.props.text}</a>;
        return aLink;
    }
}
class Leftnav extends React.Component{

    render(){
        return <LeftButton link="ciao" text="ciaicicaicaicai"/>
    }
}


export default Leftnav;

if (document.getElementById('block-left')) {
    ReactDOM.render(<Leftnav />, document.getElementById('block-left'));
}
