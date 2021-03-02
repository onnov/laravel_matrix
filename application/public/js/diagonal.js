Diagonal = {
    run: function (form) {

        let matrix = [
            [],
            [],
            []
        ];
        for (let i = 0; i < form.elements.length; i++) {
            let z = 1;
            if (i < 3) {
                z = 0;
            } else if (i > 5) {
                z = 2;
            }

            matrix[z].push((form.elements[i].value - 0));
        }

        let res = this.sum(matrix);

        document.getElementById('principal').innerText = res.principal;
        document.getElementById('secondary').innerText = res.secondary;

        return false;
    },
    sum: function (matrix) {
        return matrix.reduce((sum, cur, idx) => {
            sum.principal += cur[idx];
            sum.secondary += cur[cur.length - idx - 1];
            return sum;
        }, {
            principal: 0,
            secondary: 0,
        });
    }
}
