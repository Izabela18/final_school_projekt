import React, { Component } from 'react';


export class BookItem extends Component {
    
    
    

    render() {
        const { post_title, post_content, image } = this.props.book;    
        

            return (

                <div>
                    
                    <h1>{post_title}</h1>
                    <div dangerouslySetInnerHTML={{__html: post_content}}></div> 
                    <img src={image} alt={post_title} />
                               
                    
                </div>
            );

        
        
    }
}

export default BookItem;
