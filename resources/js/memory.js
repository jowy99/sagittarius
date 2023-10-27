//Variable declaration
let numbers = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];

let uncovered = 0;
let card1;
let card2;
let firstResult;
let secondResult;
let movements = 0;
let hits = 0;
let timer = false;
let time = 30;
let initialTime = 30;
let regressiveTimeID;

console.log(numbers);

//Make random number
numbers = numbers.sort(() => {return Math.random() - 0.5});
//Functions

//Block cards on finish
function blockCards()
{
    //Show all cards and block them
    for(let i = 0; i <= 15; i++)
    {
        let blockedCard = document.getElementById(i);
        blockedCard.innerHTML = numbers[i];
        blockedCard.disabled = true;
    }
    document.getElementById('time-left').innerHTML = 'Time: <span class="text-red-500">0 seconds.</span>';
}


//Timer count
function countTime()
{
    regressiveTimeID = setInterval(() => {
        //Restar tiempo
        time--;
        document.getElementById('time-left').innerHTML = `Time: ${time} seconds.`;
        if (time === 0)
        {
            clearInterval(regressiveTimeID);
            blockCards();
        }
    }, 1000)
}

//Principal function
function uncover(id)
{
    //Start timer on click
    if(timer === false)
    {
        countTime();
        timer = true;
    }

    uncovered++;

    if(uncovered === 1)
    {
        //Show first card
        card1 = document.getElementById(id);
        firstResult = numbers[id];
        card1.innerHTML = firstResult;

        //Disable first button
        card1.disaled = true;
    }
    else if(uncovered === 2)
    {
        //Show second card
        card2 = document.getElementById(id);
        secondResult = numbers[id];
        card2.innerHTML = secondResult;

        //Disable second card
        card2.disaled = true;

        //Increment movements
        movements++;
        document.getElementById('movements').innerHTML = `Movements: ${movements}`;

        if(firstResult === secondResult)
        {
            uncovered = 0;

            //Save hits
            hits++;
            document.getElementById('hits').innerHTML = `Hits: ${hits}`;

            //Change text on finish
            if(hits === 8)
            {
                clearInterval(regressiveTimeID);
                document.getElementById('hits').innerHTML = `Hits: ${hits}`;
                document.getElementById('time-left').innerHTML = `<span class="text-green-500">Good!</span> You've only been late <span class="text-amber-500">${initialTime - time}</span> seconds.`
                document.getElementById('movements').innerHTML = `Movements ${movements}`;
            }
        }
        else
        {
            //Show cards by moment
            setTimeout(() => {
                card1.innerHTML = ' ';
                card2.innerHTML = ' ';
                card1.disaled = false;
                card2.disaled = false;
                uncovered = 0;
            }, 200);
        }
    }
}
