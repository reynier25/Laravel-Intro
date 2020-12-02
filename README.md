Beautiful UI (by 90s standards...)
![byqpage](https://user-images.githubusercontent.com/44175105/100825422-d99b0800-340c-11eb-8620-4c4d35366077.png)

Migration:
![migration](https://user-images.githubusercontent.com/44175105/100823674-82dfff00-3409-11eb-809d-e4319b26cb51.png)

Model:
![model](https://user-images.githubusercontent.com/44175105/100823916-f6820c00-3409-11eb-90de-3885e96ad08d.png)

Routes. I use the built-in RESTful routes creator, with exceptions for 'show' and 'destroy' since they're not in our requirements. I also created an extra controller action to handle showing posts sorted by content = 'q'. I tried making radio buttons to keep everything on the same index route, but haven't yet figured out how to trigger a rerender of the index page when the radio button for "sort by 'q'" is checked. So for now, I've just made another route 'post/byq' - but this ought to be fixed ASAP to keep routes clean. Options are either trigger a query when a sort-by radio button is checked (backend), or re-sort the posts when the selected radio button changes (frontend).
![routes](https://user-images.githubusercontent.com/44175105/100824037-3f39c500-340a-11eb-9d56-a7aa4e5a9ecd.png)

Controller - note the 'byq' action that will have to be refactored out:
![controller](https://user-images.githubusercontent.com/44175105/100824681-83799500-340b-11eb-9758-7e8c04b44638.png)

Sample view. This is the view rendered for the route displaying posts sorted by 'content = q'. I used raw SQL since I wasn't sure if I could construct the query through the ORM, and didn't want to spend too much time on it:
![byqView](https://user-images.githubusercontent.com/44175105/100825818-c0468b80-340d-11eb-8aec-58f01aec8708.png)

