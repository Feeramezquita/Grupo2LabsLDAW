import React from 'react';

const styles = {
    cardImage: {
        maxHeight: 280
    }
  }
function Card({ title, imageSource, description, repo}) {
    return (
        <div className="card h-100 text-center">
            <img src={imageSource } alt="imagen no disponible" className="card-img-top" style={styles.cardImage} />
            <div className="card-body">
                <h4 className="card-title">{title}</h4>
                <p className="card-text text-secondary">{description}</p>
                <a href={repo} className="align-self-end btn btn-outline-secondary rounded-0 ">Github</a>
            </div>
        </div>
    )
}

export default Card
