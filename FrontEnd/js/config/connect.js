function Connect(){
    let conn = {
        dbLastID: 'lastID',
        getIDs: function(db){
            return new Promise(function(resolve, reject){
                var s = sessionStorage.getItem(db);
                var arr = [];
                if(s != null){
                    arr = JSON.parse(s);
                }
                resolve(arr);
            });
        },
        getDB: function(db){
            return new Promise((resolve, reject) => {
                this.getIDs(db).then(arr => {
                    var objs = [];
                    arr.forEach(id => {
                        this.getObject(id).then(obj => {
                            objs.push(obj);
                        });
                    });
                    resolve(objs);
                });
            });
        },
        addToDB: function(db, obj){
            return new Promise((resolve, reject) => {
                this.getIDs(db).then(arr => {
                    let id = this.genID();
                    arr.push(id);
                    sessionStorage.setItem(db, JSON.stringify(arr));

                    obj['oid'] = id;
                    this.setObject(id, obj);
                    resolve(id);
                }, err => {
                    reject(err);
                });
            });
        },
        removeFromDB: function(db, id){
            return new Promise((resolve, reject) => {
                this.getIDs(db).then(arr => {
                    console.log(id);
                    console.log(arr);
                    let i = arr.indexOf(id);
                    if(i >= 0){
                        arr.splice(i, 1);
                        sessionStorage.setItem(db, JSON.stringify(arr));
                        this.removeObject(id);
                        resolve(id);
                    }else{
                        reject(i);
                    }
                }, err => {
                    reject(err);
                });
            });
        },
        getObject: function(id){
            return new Promise((resolve, reject) => {
                let str = sessionStorage.getItem(id);
                var obj = {};
                if(str != null){
                    obj = JSON.parse(str);
                }
                resolve(obj);
            });
        },
        setObject: function(id, obj){
            return new Promise((resolve, reject) => {
                sessionStorage.setItem(id, JSON.stringify(obj));
                resolve(obj);
            });
        },
        removeObject: function(id){
            return new Promise((resolve, reject) => {
                sessionStorage.removeItem(id);
                resolve(null);
            });
        },
        genID: function(){
            var id = this.getLastID();
            id = id + 1;
            sessionStorage.setItem(this.dbLastID, id);
            return id;
        },
        getLastID: function(){
            var id = sessionStorage.getItem(this.dbLastID);
            if(id == null) id = 0;
            return Number(id);
        }
    };

    return conn;
}