const el = (tagName, attributes, children) => {
  const element = document.createElement(tagName);

  if (attributes) {
    for (const attrName in attributes) {
      element.setAttribute(attrName, attributes[attrName]);
    }
  }

  if (children) {
    for (let i = 0; i < children.length; i++) {
			const child = children[i];

			if (typeof child === 'string') {
				element.appendChild(document.createTextNode(child));
			} else {
	      element.appendChild(child);
      }
 		}
  }

  return element;
};

const div = (a, c) => el('div', a, c);

const ranks = 'A 2 3 4 5 6 7 8 9 10 J Q K'.split(' ');
const suits = '♠︎ ♥︎ ♣︎ ♦︎'.split(' ');

const getRank = (i) => ranks[i % 13];
const getSuit = (i) => suits[i / 13 | 0];
const getColor = (i) => (i / 13 | 0) % 2 ? 'red' : 'black';

const createCard = (i) => {
  const rank = getRank(i);
  const suit = getSuit(i);
  const colorClass = 'card ' + getColor(i);

  return div({ class: colorClass }, [
    div({ class: 'card-topleft' }, [
      div({ class: 'card-corner-rank' }, [
      	rank
      ]),
      div({ class: 'card-corner-suit' }, [
      	suit
      ])
    ]),
    div({ class: 'card-bottomright' }, [
      div({ class: 'card-corner-rank' }, [
        rank
      ]),
      div({ class: 'card-corner-suit' }, [
        suit
      ])
    ])
  ]);
};

const cardsData = new Array(52);

for (let i = 0; i < cardsData.length; i++) {
  cardsData[i] = i;
}

const deck = div({ class: 'deck' });

cardsData.forEach((i) => {
  const card = createCard(i);
  
  deck.appendChild(card);
});

document.body.appendChild(deck);