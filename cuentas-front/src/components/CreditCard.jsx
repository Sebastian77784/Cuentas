export default function CreditCard({name, number, person, fecha}){
    return(
        <>
                      <div className="credit-card">
                        <h5>{name}</h5>
                        <div className="credit-card-number">{number}</div>
                        <div className="d-flex justify-content-between">
                          <span>{person}</span>
                          <span>{fecha}</span>
                        </div>
                      </div>
        </>
    )
}