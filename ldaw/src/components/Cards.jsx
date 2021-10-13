import React from 'react'
import Card from './Card';
import image1 from '../assets/fer.png';
import image2 from '../assets/image2.jpeg';
import image3 from '../assets/image3.jpeg';
import './cards.css';


const cards = [
    {
        id: 1,
        title: 'Fer',
        image: image1 ,
        repo: 'https://github.com/feeramezquita',
        description: 'Nombre: Fernando Amézquita Millán Matrícula: A01421954 En experiencia en desarrollo Web he usado lenguajes como php, JS y para codificar CSS y HTML. Los frameworks que he usado son "Vue Js, React Js, Bootstrap, Materialize, Laravel"' 
    },
    {
        id: 2,
        title: 'Adrian',
        image: image2,
        repo: 'https://github.com/a01173530',
        description: 'Nombre: Adrián Torres Hernández Matrícula: A01173530 En experiencia en desarrollo Web he usado lenguajes como php, javascript  y para codificar css y html. Los frameworks que he usado ha sido solamente node js'

    },
    {
        id: 3,
        title: 'Rodrigo',
        image: image3,
        repo: 'https://github.com/Royd117',
        description: 'Nombre: Luis Rodrigo Montúfar Pérez Mátricula: A01273078 En experiencia en desarrollo Web he usado lenguajes como php, javascript y python por parte de diseño he utilizado css y html con el framework de bootstrap. Los frameworks que he usado ha sido node.js y un poco de angular'

    }
]
function Cards() {
    return (
        <div className="container d-flex justify-content-center align-items-center h-100">
            <div className="row">
                {
                    cards.map(card => (
                        <div className="col-md-4" key={card.id}>
                            <Card
                                title={card.title}
                                imageSource={card.image}
                                description={card.description}
                                repo={card.repo}
                            />
                        </div>

                    ))
                }
            </div>
        </div>
    )
}

export default Cards
